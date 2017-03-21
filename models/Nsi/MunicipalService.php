<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementNsiRefFieldType;
use gisgkh\types\NsiBase\NsiElementOkeiRefFieldType;
use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use \opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Вид коммунальной услуги
 *
 * @package opengkh\gis\models\Nsi
 */
class MunicipalService extends GisNsiPermanentDirectoryEntry
{
    const FIELD_TITLE_NAME                              = 'Вид коммунальной услуги';
    const FIELD_TITLE_OKEI                              = 'Единица измерения';
    const FIELD_TITLE_POWER_OKEI                        = 'Единица измерения мощности и присоединенной нагрузки';
    const FIELD_TITLE_OKI_MUNICIPAL_RESOURCE_REFERENCE  = 'Вид коммунального ресурса для ОКИ';
    const FIELD_TITLE_ORDER                             = 'Порядок сортировки';

    /**
     * @var string $name Вид коммунальной услуги
     */
    public $name = null;

    /**
     * @var string $okei Единица измерения. Код по справочнику ОКЕИ
     */
    public $okei = null;

    /**
     * @var string $okei Единица измерения мощности и присоединенной нагрузки. Код по справочнику ОКЕИ
     */
    public $powerOkei = null;

    /**
     * @var GisNsiDirectoryEntryLink $okiMunicipalResourceReference Вид коммунального ресурса для ОКИ
     */
    public $okiMunicipalResourceReference = null;

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
            switch($nsiField->Name) {
                case self::FIELD_TITLE_NAME:
                    /* @var NsiElementStringFieldType $nsiField */
                    $this->name = $nsiField->Value;
                    break;
                case self::FIELD_TITLE_OKEI:
                    /* @var NsiElementOkeiRefFieldType $nsiField */
                    $this->okei = $nsiField->Code;
                    break;
                case self::FIELD_TITLE_POWER_OKEI:
                    /* @var NsiElementOkeiRefFieldType $nsiField */
                    $this->powerOkei = $nsiField->Code;
                    break;
                case self::FIELD_TITLE_OKI_MUNICIPAL_RESOURCE_REFERENCE:
                    /* @var NsiElementNsiRefFieldType $nsiField */
                    if (!empty($nsiField->NsiRef)) {
                        $this->okiMunicipalResourceReference = GisNsiDirectoryEntryLink::convertFrom($nsiField->NsiRef->Ref);
                    } else {
                        $this->okiMunicipalResourceReference = null;
                    }
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