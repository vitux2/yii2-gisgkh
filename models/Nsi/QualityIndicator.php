<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementNsiRefFieldType;
use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Показатель качества коммунальных ресурсов
 * @package opengkh\gis\models\Nsi
 */
class QualityIndicator extends GisNsiPermanentDirectoryEntry
{
    const FIELD_TITLE_NAME = 'Наименование показателя качества';
    const FIELD_TITLE_CHARGEABLE_RESOURCE = 'Ресурс, к которому относится показатель';
    const FIELD_TITLE_TYPE = 'Тип поля';

    /**
     * @var string $name Наименование показателя
     */
    public $name = null;

    /**
     * @var GisNsiDirectoryEntryLink $chargeableResourceReference Тарифицируемый ресурс, к которому относится показатель.
     */
    public $chargeableResourceReference = null;

    /**
     * @var string $type Тип поля
     */
    public $type = null;

    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        foreach ($source->NsiElementField as $nsiField) {
            $fieldClassName = (new \ReflectionClass($nsiField))->getName();
            if ($fieldClassName == NsiElementNsiRefFieldType::class) {
                /* @var NsiElementNsiRefFieldType $nsiField */
                $this->chargeableResourceReference = GisNsiDirectoryEntryLink::convertFrom($nsiField->NsiRef->Ref);
            } else {
                /* @var NsiElementStringFieldType $nsiField */
                if ($nsiField->Name == static::FIELD_TITLE_NAME) {
                    $this->name = $nsiField->Value;
                } else {
                    $this->type = $nsiField->Value;
                }
            }
        }

        return parent::fillFrom($source);
    }
}