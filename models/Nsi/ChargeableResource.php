<?php

namespace startuplab\gisgkh\common\models\Nsi;

use gisgkh\types\lib\Nsi\NsiElementStringFieldType;
use gisgkh\types\lib\Nsi\NsiElementType;
use startuplab\gisgkh\common\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Тарифицируемый ресурс
 *
 * @package startuplab\gisgkh\common\models\Nsi
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