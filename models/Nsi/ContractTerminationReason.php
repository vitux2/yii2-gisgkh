<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Причина расторжения договора
 * реестровый номер справочника в ГИС ЖКХ -- 54
 */
class ContractTerminationReason extends GisNsiPermanentDirectoryEntry
{
    /**
     * @var string $title Причина расторжения договора
     */
    public $title = null;


    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        /* @var NsiElementStringFieldType $field */
        $field = @$source->NsiElementField[0];

        $this->title = empty($field) ? null : $field->Value;

        return parent::fillFrom($source);
    }
}