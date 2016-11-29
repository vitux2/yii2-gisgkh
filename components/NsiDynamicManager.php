<?php

namespace opengkh\gis\components;

use yii\base\Component;

use gisgkh\NsiCommonService;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\Nsi\NsiElementType;
use gisgkh\types\lib\Nsi\NsiItemInfoType;

use opengkh\gis\Module;
use opengkh\gis\exceptions\GisgkhRequestControlException;
use opengkh\gis\interfaces\nsi\DynamicReference\IDynamicElement;
use opengkh\gis\interfaces\nsi\DynamicReference\IDynamicReference;
use opengkh\gis\interfaces\nsi\DynamicReference\IDynamicReferenceManager;
use yii\base\Exception;

/**
 * Компонент для выполнения задач импорта/экспорта над справочниками ГИС ЖКХ
 *
 * @package opengkh\gis\components
 */
class NsiDynamicManager extends Component
{
    /**
     * @var IDynamicReferenceManager $referenceManager
     */
    public $referenceManager = null;

    /**
     * @var callable $reportCallback function (string $message)
     */
    public $reportCallback = null;

    /**
     * Обновление перечня справочников
     * @throws GisgkhRequestControlException
     */
    public function updateReferencesList()
    {
        $this->report(
            "\nИмпорт перечня справочников NSI из ГИС ЖКХ" .
            "\nИспользуемая версия API ГИС ЖКХ: " . Module::getInstance()->version . "\n"
        );

        $this->report(
            "\nИмпорт справочников NSI из ГИС ЖКХ" .
            "\nИспользуемая версия API ГИС ЖКХ: " . Module::getInstance()->version . "\n"
        );

        $nsiCommonService = new NsiCommonService();
        $nsiListResult = $nsiCommonService->exportNsiList();

        // если получить перечень справочников не удалось, то генерируется исключение
        if (!empty($nsiListResult->ErrorMessage)) {
            throw new GisgkhRequestControlException($nsiListResult->ErrorMessage);
        }

        $nsiItems = $nsiListResult->NsiList->NsiItemInfo;

        $this->report("\nОбщее количество справочников в ГИС ЖКХ: " . count($nsiItems) . "\n");

        // сортируем справочники по реестровому номеру
        // это опционально (может быть полезно при логгировании процесса импорта)
        $this->sortNsiItems($nsiItems);

        // бежим по перечню справочников
        foreach ($nsiItems as $nsiItemInfo) {
            // получаем экземпляр справочника в реестре ИС по реестровому номеру справочника
            $reference = $this->referenceManager->getReferenceByRegistryNumber($nsiItemInfo->RegistryNumber);

            // если в реестре ИС справочника нет, то создаём его
            if (empty($reference)) {
                $reference = $this->referenceManager->createReference($nsiItemInfo->RegistryNumber, $nsiItemInfo->Name);
            } else {
                // обновляем название справочника
                $reference->setName($nsiItemInfo->Name);
            }
        }
    }

    /**
     * Обновить элементы справочника
     * @param string $registryNumber
     * @return boolean
     */
    public function updateReference($registryNumber)
    {
        $nsiCommonService = new NsiCommonService();

        // получаем экземпляр справочника в реестре по реестровому номеру справочника
        $reference = $this->referenceManager->getReferenceByRegistryNumber($registryNumber);

        if (empty($reference)) return false;

        $modifiedAfter = null;
        if (!empty($reference)) {
            $modifiedAt = $reference->getModifiedAt();
            if (!empty($modifiedAt)) {
                $modifiedAfter = $modifiedAt->add(new \DateInterval('PT1H'));
            }
        }

        // получаем из ГИС ЖКХ перечень элементов справочника для импорта
        // если справочник в реестре не пустой, то запрашиваются только обновлённые элементы
        $nsiItemResult = $nsiCommonService->exportNsiItem($registryNumber, $modifiedAfter);

        // если получить элементы для импорта не удалось, то
        // обрабатываем ощибку, пишем в отчет и переходим к следующему справочнику
        if (!empty($nsiItemResult->ErrorMessage)) {
            switch ($nsiItemResult->ErrorMessage->ErrorCode) {
                case ErrorMessageType::ERROR_CODE_NSI_ITEM_NOT_FOUND:
                    $this->report(sprintf(
                        "\n%s: Справочник не предоставляется по реестровому номеру\n",
                        $registryNumber
                    ));
                    break;
                case ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION:
                    $this->report(sprintf(
                        "\n%s: Новых элементов не найдено\n",
                        $registryNumber
                    ));
                    break;
                default:
                    $this->report(sprintf(
                        "\n%s: Непредвиденная ошибка при запросе элементов. %s: %s\n",
                        $registryNumber,
                        $nsiItemResult->ErrorMessage->ErrorCode,
                        $nsiItemResult->ErrorMessage->Description
                    ));
            }
            return false;
        }

        foreach ($nsiItemResult->NsiItem->NsiElement as $nsiElement) {
            $this->importElement($reference, $nsiElement);
        }

        $importedElementsCount = count($nsiItemResult->NsiItem->NsiElement);

        $this->report(
            "\nОбновлён справочник №" . $registryNumber . ": " . $reference->getName() .
            "\nКоличество новых и обновлённых записей: " . $importedElementsCount . "\n");

    }

    /**
     * Полный импорт справочников из ГИС ЖКХ во внутренний реестр
     * Если справочники не пустые, то происходит только обновление
     *
     * @return boolean было ли что-то обновлено
     * @throws GisgkhRequestControlException ошибка контроля запроса на стороне ЖКХ (обычно возникает при обновлении версии)
     */
    public function import()
    {
        $result = false;

        $this->report(
            "\nИмпорт справочников NSI из ГИС ЖКХ" .
            "\nИспользуемая версия API ГИС ЖКХ: " . Module::getInstance()->version . "\n"
        );

        $nsiCommonService = new NsiCommonService();
        $nsiListResult = $nsiCommonService->exportNsiList();

        // если получить перечень справочников не удалось, то генерируется исключение
        if (!empty($nsiListResult->ErrorMessage)) {
            throw new GisgkhRequestControlException($nsiListResult->ErrorMessage);
        }

        $nsiItems = $nsiListResult->NsiList->NsiItemInfo;

        $this->report("\nОбщее количество справочников в ГИС ЖКХ: " . count($nsiItems) . "\n");

        // сортируем справочники по реестровому номеру
        // это опционально (может быть полезно при логгировании процесса импорта)
        $this->sortNsiItems($nsiItems);

        // бежим по перечню справочников
        foreach ($nsiItems as $nsiItemInfo) {

//            if ($nsiItemInfo->RegistryNumber != '236') {
//                continue;
//            }

            // получаем экземпляр справочника в реестре по реестровому номеру справочника
            $reference = $this->referenceManager->getReferenceByRegistryNumber($nsiItemInfo->RegistryNumber);

            $modifiedAfter = null;
            if (!empty($reference)) {
                $modifiedAt = $reference->getModifiedAt();
                if (!empty($modifiedAt)) {
                    $modifiedAfter = $modifiedAt->add(new \DateInterval('PT1H'));
                }
            }

            // получаем из ГИС ЖКХ перечень элементов справочника для импорта
            // если справочник в реестре не пустой, то запрашиваются только обновлённые элементы
            $nsiItemResult = $nsiCommonService->exportNsiItem($nsiItemInfo->RegistryNumber, $modifiedAfter);

//            print_r($nsiCommonService->__getLastResponse());
//            print_r($nsiItemResult);
            //die();

            // если получить элементы для импорта не удалось, то
            // обрабатываем ощибку, пишем в отчет и переходим к следующему справочнику
            if (!empty($nsiItemResult->ErrorMessage)) {
                switch ($nsiItemResult->ErrorMessage->ErrorCode) {
                    case ErrorMessageType::ERROR_CODE_NSI_ITEM_NOT_FOUND:
                        $this->report(sprintf(
                            "\n%d: %s\nСправочник заявлен в перчне, но не предоставляется по реестровому номеру\n",
                            $nsiItemInfo->RegistryNumber,
                            $nsiItemInfo->Name
                        ));
                        break;
                    case ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION:
                        $this->report(sprintf(
                            "\n%d: %s\nНовых элементов не найдено\n",
                            $nsiItemInfo->RegistryNumber,
                            $nsiItemInfo->Name
                        ));
                        break;
                    default:
                        $this->report(sprintf(
                            "\n%d: %s\nНепредвиденная ошибка при запросе элементов. %s: %s\n",
                            $nsiItemInfo->RegistryNumber,
                            $nsiItemInfo->Name,
                            $nsiItemResult->ErrorMessage->ErrorCode,
                            $nsiItemResult->ErrorMessage->Description
                        ));
                }
                continue;
            }

            $result = true;

            $importedElementsCount = count($nsiItemResult->NsiItem->NsiElement);

            // если справочника во внутреннем реестре нет -- создаём
            // если справочник есть -- импортируем новые элементы
            if (empty($reference)) {
                $this->importRef($nsiItemInfo, $nsiItemResult->NsiItem->NsiElement);
                $this->report(
                    "\nИпортирован новый справочник №" . $nsiItemInfo->RegistryNumber . ": " . $nsiItemInfo->Name .
                    "\nКоличество записей: " . $importedElementsCount . "\n");
            } else {
                $this->updateRef($reference, $nsiItemInfo, $nsiItemResult->NsiItem->NsiElement);
                $this->report(
                    "\nОбновлён справочник №" . $nsiItemInfo->RegistryNumber . ": " . $nsiItemInfo->Name .
                    "\nКоличество новых и обновлённых записей: " . $importedElementsCount . "\n");
            }

        }

        //@todo: импорт справочников частной НСИ
        //@todo: импорт справочников NSIRAO

        return $result;
    }

    /* *
     * Вспомогательные функции
     * ************************************************************************************************************** */

    /**
     * Записать сообщение в отчет
     *
     * @param string $message
     */
    private function report($message)
    {
        if (!empty($this->reportCallback)) {
            call_user_func($this->reportCallback, $message);
        }
    }

    /**
     * @param NsiItemInfoType[] $nsiItems
     */
    private function sortNsiItems(&$nsiItems)
    {
        usort($nsiItems, function (NsiItemInfoType $a, NsiItemInfoType $b) {
            if ($a->RegistryNumber == $b->RegistryNumber) {
                return 0;
            }
            return ($a->RegistryNumber < $b->RegistryNumber) ? -1 : 1;
        });
    }

    /**
     * Создать новый справочник и ипортировать сведения из ГИС ЖКХ
     * @param NsiItemInfoType $nsiItemInfo
     * @param NsiElementType[] $nsiElements
     * @return IDynamicReference
     */
    private function importRef($nsiItemInfo, $nsiElements)
    {
        $reference = $this->referenceManager->createReference($nsiItemInfo->RegistryNumber, $nsiItemInfo->Name);
        $reference->setModifiedAt($nsiItemInfo->getModified());

        // по всем элементам выполняем внутреннюю процедуру импорта
        foreach ($nsiElements as $nsiElement) {
            $this->importElement($reference, $nsiElement);
        }

        return $reference;
    }

    /**
     * Обновить справочник
     * @param IDynamicReference $reference
     * @param NsiItemInfoType $nsiItemInfo
     * @param NsiElementType[] $nsiElements
     */
    private function updateRef($reference, $nsiItemInfo, $nsiElements)
    {
        $reference->setModifiedAt($nsiItemInfo->getModified());
        $reference->setName($nsiItemInfo->Name);

        // по всем элементам выполняем внутреннюю процедуру импорта
        foreach ($nsiElements as $nsiElement) {
            $this->importElement($reference, $nsiElement);
        }
    }

    /**
     * Импорт элемента справочника (с рекурсией для дочерних элементов)
     *
     * @param IDynamicReference $reference
     * @param NsiElementType $nsiElement
     * @return IDynamicElement
     */
    private function importElement($reference, $nsiElement)
    {
        // смотрим есть ли в реестре элемент с таким кодом
        $element = $reference->getElementByCode($nsiElement->Code);

        // если элемент есть, но GUID не совпадает -- архивируем
        if (!empty($element) && ($element->getGuid() != $nsiElement->GUID)) {
            $element->archive();
        }

        // если элемента нет или GUID не совпадает -- создаём новый элемент
        if (empty($element) || ($element->getGuid() != $nsiElement->GUID)) {
            try {
                $element = $reference->createElement($nsiElement->Code, $nsiElement->GUID);
            } catch (Exception $e) {
                return null;
            }
        }

        // устанавливаем динамические поля
        $element->setFields($nsiElement->NsiElementField);

        // устанавливаем метаданные
        if (!empty($nsiElement->Modified)) $element->setModifiedAt($nsiElement->getModified());
        if (!empty($nsiElement->IsActual)) $element->setIsActual($nsiElement->getIsActual());
        if (!empty($nsiElement->StartDate)) $element->setEffectiveDate($nsiElement->getStartDate());
        if (!empty($nsiElement->EndDate)) $element->setExpiryDate($nsiElement->getEndDate());

        // обрабатываем дочерние элементы
//        foreach ($nsiElement->ChildElement as $nsiElement) {
//            $childElement = $this->importElement($reference, $nsiElement);
//            $childElement->setParentElement($element);
//        }

        return $element;
    }
}