<?php

namespace opengkh\gis\models\Nsi\common;

use gisgkh\types\NsiBase\nsiRef;
use opengkh\gis\models\common\CompatibleWithGisgkh;

/**
 * Ссылка на элемент справочника
 * @package opengkh\gis\models\Nsi\common
 */
class GisNsiDirectoryEntryLink extends CompatibleWithGisgkh
{
    /**
     * @var string $code Код записи справочника
     */
    public $code = null;

    /**
     * @var string $guid Идентификатор в ГИС ЖКХ
     */
    public $guid = null;

    public $name = null;

    /**
     * @inheritdoc
     * @param nsiRef $source
     */
    public function fillFrom($source)
    {
        $this->code = $source->Code;
        $this->guid = $source->GUID;
        $this->name = $source->Name;
        return $this;
    }

    /**
     * Формирование ссылки на элемент справочника в формате ГИС ЖКХ
     * @inheritdoc
     * @param nsiRef $target
     */
    public function fillTo(&$target)
    {
        $target->Code = $this->code;
        $target->GUID = $this->guid;
        $target->Name = $this->name;
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return nsiRef::class;
    }
}