<?php

namespace opengkh\gis\models\Nsi\common;

use yii\base\Model;
use opengkh\gis\Module;

use gisgkh\services\NsiCommonService;
use gisgkh\ErrorMessageType;
use opengkh\gis\exceptions\GisgkhRequestControlException;

/**
 * Справочник НСИ ГИС ЖКХ
 * @package opengkh\gis\models\Nsi\common
 */
abstract class GisNsiDirectory extends Model
{
    /* *
     * Абстрактные и виртуальные функции
     * ************************************************************************************************************** */

    /**
     * @return integer Реестровый номер справочника
     */
    abstract function getRegisterNumber();

    /**
     * @return string Имя класса-контейнера для обработки элементов справочника (наследуется от GisNsiDirectoryEntry)
     */
    abstract function getEntryClassName();

    /**
     * @return string Имя атрибута, по которому требуется отсортировать элементы
     */
    public function getOrderAttributeName()
    {
        return 'code';
    }

    /* *
     * Открытая часть
     * ************************************************************************************************************** */

    /**
     * @param \DateTime|null $modifiedFrom Если указано, то справочник предоставит только те элементы, которые были обновлены после этой даты
     */
    public function __construct(\DateTime $modifiedFrom = null)
    {
        parent::__construct();
        $this->modifiedFrom = $modifiedFrom;
    }

    /**
     * @return string
     */
    public function getName()
    {
        if ($this->name === null) $this->requestMetadata();

        return $this->name;
    }

    /**
     * Получиь элементы справочника
     * @return GisNsiDirectoryEntry[]
     * @throws GisgkhRequestControlException
     */
    public function getEntries()
    {
        if ($this->entries === null) {
            $this->entries = $this->requestEntries();
        }

        return $this->entries;
    }

    /* *
     * Приватные поля
     * ************************************************************************************************************** */

    /**
     * @var bool был ли выполнен запрос на получение метаданных
     */
    protected $metadataRequested = false;

    /**
     * @var string Название справочника
     */
    protected $name = null;

    /**
     * @var \DateTime $modifiedFrom Дата и время, начиная с которых требуется получить обновлённые элементы
     */
    protected $modifiedFrom = null;

    /**
     * @var GisNsiDirectoryEntry[] $entries Элементы справочника
     */
    protected $entries = null;

    /* *
     * Вспомогательные функции
     * ************************************************************************************************************** */

    /**
     * Выполнить зарос на получение метаданных
     * @throws GisgkhRequestControlException
     */
    protected function requestMetadata()
    {
        //@todo: implement NSI directory metadata request function
        $this->name = '';
        $this->metadataRequested = true;
    }

    /**
     * Выполнить запрос на получение записей
     * @return GisNsiDirectoryEntry[]
     * @throws GisgkhRequestControlException
     */
    protected function requestEntries()
    {
        $nsiCommonService = Module::getInstance()->serviceFactory->NsiCommonService();

        // выполнение запроса к ГИС ЖКХ на получение записей справочника НСИ
        $result = $nsiCommonService->exportNsiItem(
            (string) $this->getRegisterNumber(),
            empty($this->modifiedFrom) ? null : $this->modifiedFrom->format(DATE_ATOM)
        );

        // обработка возможных ошибок
        if ($result->ErrorMessage) {
            if ($result->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return [];
            } else {
                throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }

        // преобразование записей в обобщенный интерфейс
        $elements = [];
        foreach ($result->NsiItem->NsiElement as $nsiElement) {
            /* @var GisNsiDirectoryEntry $element */
            $entryClassName = $this->getEntryClassName();
            $elements[] = call_user_func([$entryClassName, 'convertFrom'], $nsiElement);
        }

        // сортировка записей
        if (!empty($orderBy)) {
            $this->sort($elements);
        }

        return $elements;
    }

    /**
     * Сортировка записей
     * @param GisNsiDirectoryEntry[] $array
     */
    private function sort(&$array)
    {
        $attribute = $this->getOrderAttributeName();
        usort($array, function (GisNsiDirectoryEntry $a, GisNsiDirectoryEntry $b) use ($attribute) {
            if ($a->{$attribute} == $b->{$attribute}) {
                return 0;
            }
            return ($a->{$attribute} < $b->{$attribute}) ? -1 : 1;
        });
    }
}