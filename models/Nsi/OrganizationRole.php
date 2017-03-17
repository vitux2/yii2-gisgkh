<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Полномочие организации
 *
 * @package opengkh\gis\models\Nsi
 */
class OrganizationRole extends GisNsiPermanentDirectoryEntry
{
    /**
     * @var string $name наименование полномочия
     */
    public $name = null;

    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        /* @var NsiElementStringFieldType $field */
        $field = @$source->NsiElementField[0];

        $this->name = empty($field) ? null : $field->Value;

        return parent::fillFrom($source);
    }
}