<?php

namespace startuplab\gisgkh\common\models\Nsi;

use gisgkh\types\lib\Nsi\NsiElementStringFieldType;
use startuplab\gisgkh\common\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Полномочие организации
 *
 * @package startuplab\gisgkh\common\models\Nsi
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