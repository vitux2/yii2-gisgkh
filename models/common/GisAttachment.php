<?php

namespace opengkh\gis\models\common;
use gisgkh\FileService;
use gisgkh\types\lib\AttachmentType;
use opengkh\gis\exceptions\GisgkhException;
use opengkh\gis\exceptions\GisgkhFileDownloadException;
use opengkh\gis\exceptions\GisgkhFileUploadException;

/**
 * Вложение (файл)
 *
 * @package opengkh\gis\models\common
 */
class GisAttachment extends CompatibleWithGisgkh
{
    /* контексты хранилищ функциональных подсистем */
    const CONTEXT_HOMEMANAGEMENT            = 'homemanagement';         // Подсистема Управление домами, Лицевые счета
    const CONTEXT_RKI                       = 'rki';                    // Подсистема Реестр коммунальной инфраструктуры
    const CONTEXT_VOTING                    = 'voting';                 // Подсистема Голосования
    const CONTEXT_INSPECTION                = 'inspection';             // Подсистема Инспектирование жилищного фонда
    const CONTEXT_INFORMING                 = 'informing';              // Подсистема Оповещения
    const CONTEXT_BILLS                     = 'bills';                  // Подсистема Электронные счета
    const CONTEXT_LICENSES                  = 'licenses';               // Подсистема Лицензии
    const CONTEXT_AGREEMENTS                = 'agreements';             // Подсистема Договора (ДУ, уставы, ДПОИ)
    const CONTEXT_NSI                       = 'nsi';                    // Подсистема Нормативно-справочная информации
    const CONTEXT_DISCLOSURE                = 'disclosure';             // Подсистема Раскрытие деятельности УО
    const CONTEXT_CAPITAL_REPAIR_PROGRAMS   = 'capitalrepairprograms';  // Подсистема Капитальный ремонт

    /**
     * @var string $name Наименование вложения
     */
    public $name = null;

    /**
     * @var string $description Описание вложения
     */
    public $description = null;

    /**
     * @var string $hash Хэш-тег вложения по алгоритму ГОСТ в binhex
     * hash('gost-crypto', file_get_contents($pathToFile));
     * Не тот что указывается при загрузке файла!
     */
    public $hash = null;

    /**
     * @var string $guid Глобально-уникальный идентификатор вложения в базе ГИС ЖКХ (предварительно загруженного)
     */
    public $guid;

    /**
     * @inheritdoc
     * @param AttachmentType $source
     */
    public function fillFrom($source)
    {
        $this->name = $source->Name;
        $this->description = $source->Description;
        $this->hash = $source->AttachmentHASH;
        $this->guid = $source->Attachment->AttachmentGUID;
        return $this;
    }

    /**
     * @inheritdoc
     * @param AttachmentType $target
     */
    public function fillTo(&$target)
    {
        $target->Name = $this->name;
        $target->Description = $this->description;
        $target->AttachmentHASH = $this->hash;
        $target->Attachment = new \gisgkh\types\lib\Attachment($this->guid);
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return AttachmentType::className();
    }

    /**
     * Загрузить файл в ГИС (синхронно, до 5 Мб)
     *
     * @param string $context контекст функциональной подсистемы
     * @param string $filePath
     * @param string $fileName
     * @return self
     * @throws GisgkhFileUploadException
     */
    public static function upload($context, $filePath, $fileName = null)
    {
        $fileService = new FileService();
        $gisAttachment = $fileService->upload($context, $filePath, $fileName);

        if (empty($gisAttachment)) {
            throw new GisgkhFileUploadException($fileService->lastError);
        }

        return static::convertFrom($gisAttachment);
    }

    /**
     * Получить файл из ГИС (синхронно, до 5 Мб)
     *
     * @param string $context
     * @param string $filePath путь к файлу куда нужно сохранить полученый файл
     * @throws GisgkhFileDownloadException
     * @return boolean
     */
    public function download($context, $filePath)
    {
        $fileService = new FileService();
        $success = $fileService->download($context, $filePath, $this->convertTo());

        if (!$success) {
            return false;
            // throw new GisgkhFileDownloadException($fileService->lastError);
        }

        return true;
    }
}