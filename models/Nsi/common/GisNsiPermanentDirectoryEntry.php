<?php

namespace opengkh\gis\models\Nsi\common;
use gisgkh\types\NsiBase\NsiElementType;

/**
 * Абстрактный не ограниченный по времени действия элемент справочника
 * @package opengkh\gis\models\Nsi
 */
abstract class GisNsiPermanentDirectoryEntry extends GisNsiDirectoryEntry
{
    /**
     * @var \DateTime $modified Дата последнего изменения
     */
    public $modified = null;

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields =  parent::fields();

        unset($fields['modified']);

        return $fields;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        $this->modified = new \DateTime($source->Modified);
        return parent::fillFrom($source);
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        parent::fillTo($target);
        $target->Modified = $this->modified->format(DATE_ATOM);
    }
}