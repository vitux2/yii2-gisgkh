<?php

namespace opengkh\gis\models\Nsi\common;

use gisgkh\types\NsiBase\NsiElementType;
use opengkh\gis\models\common\CompatibleWithGisgkh;

/**
 * Абстрактный элемент справочника
 * @package opengkh\gis\models\Nsi
 */
abstract class GisNsiDirectoryEntry extends CompatibleWithGisgkh
{
    /**
     * @var string $code Код элемента справочника
     */
    public $code = null;

    /**
     * @var string $guid Глобальный уникальный идентификатор версии элемента справочника
     */
    public $guid = null;

    /**
     * @var boolean $isActual Признак актуальности элемента справочника
     */
    public $isActual = null;

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields =  parent::fields();

        unset($fields['isActual']);

        return $fields;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        $this->code = $source->Code;
        $this->guid = $source->GUID;
        $this->isActual = $source->IsActual;
        return $this;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        $target->Code = $this->code;
        $target->GUID = $this->guid;
        $target->IsActual = $this->isActual ? 'true' : 'false';
    }

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        return NsiElementType::class;
    }
}