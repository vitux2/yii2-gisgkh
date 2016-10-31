<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\lib\Nsi\NsiElementStringFieldType;
use gisgkh\types\lib\Nsi\NsiElementType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Вид документа, удостоверяющего личность
 *
 * @package opengkh\gis\models\Nsi
 */
class IdentityDocument extends GisNsiPermanentDirectoryEntry
{
    /**
     * @var string $name Наименование вида документа
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