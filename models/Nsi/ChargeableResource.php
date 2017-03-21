<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementStringFieldType;
use gisgkh\types\NsiBase\NsiElementType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Тарифицируемый ресурс
 *
 * @package opengkh\gis\models\Nsi
 */
class ChargeableResource extends GisNsiPermanentDirectoryEntry
{
    /**
     * @var string $name Наименование тарифицируемого ресурса
     */
    public $name = null;

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        /* @var NsiElementStringFieldType $field */
        $field = @$source->NsiElementField[0];

        $this->name = empty($field) ? null : $field->Value;

        return parent::fillFrom($source);
    }
}