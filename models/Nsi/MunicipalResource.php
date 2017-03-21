<?php

namespace opengkh\gis\models\Nsi;
use gisgkh\types\NsiBase\NsiElementBooleanFieldType;
use gisgkh\types\NsiBase\NsiElementOkeiRefFieldType;
use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Вид коммунального ресурса
 *
 * @package opengkh\gis\models\Nsi
 */
class MunicipalResource extends GisNsiPermanentDirectoryEntry
{
    const FILED_TITLE_NAME                  = 'Вид коммунального ресурса';
    const FIELD_TITLE_SHORT_NAME            = 'Сокращенное наименование';
    const FIELD_TITLE_CAN_LINK_WITH_DEVICE  = 'Признак возможности установки связи с прибором учета';
    const FIELD_TITLE_OKEI                  = 'Единица измерения';
    const FIELD_TITLE_ORDER                 = 'Порядок сортировки';

    /**
     * @var string $name Вид коммунального ресурса (наименование)
     */
    public $name = null;

    /**
     * @var string $shortName Сокращенное наименовение
     */
    public $shortName = null;

    /**
     * @var bool $canLinkWithDevice Признак возможности установки связи с прибором учета
     */
    public $canLinkWithDevice = null;

    /**
     * @var string $okei Единица измерения. Код по справочнику ОКЕИ
     */
    public $okei = null;

    /**
     * @var integer $order Порядок сортировки
     */
    public $order = null;

    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        foreach ($source->NsiElementField as $nsiField) {
            switch ($nsiField->Name) {
                case self::FILED_TITLE_NAME:
                    /* @var NsiElementStringFieldType $nsiField */
                    $this->name = $nsiField->Value;
                    break;
                case self::FIELD_TITLE_SHORT_NAME:
                    /* @var NsiElementStringFieldType $nsiField */
                    $this->shortName = $nsiField->Value;
                    break;
                case self::FIELD_TITLE_CAN_LINK_WITH_DEVICE:
                    /* @var NsiElementBooleanFieldType $nsiField */
                    $this->canLinkWithDevice = filter_var($nsiField->Value, FILTER_VALIDATE_BOOLEAN);
                    break;
                case self::FIELD_TITLE_OKEI:
                    /* @var NsiElementOkeiRefFieldType $nsiField */
                    $this->okei = $nsiField->Code;
                    break;
                case self::FIELD_TITLE_ORDER:
                    /* @var NsiElementStringFieldType $nsiField */
                    $this->order = intval($nsiField->Value);
                    break;

            }
        }

        return parent::fillFrom($source);
    }

}