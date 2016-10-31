<?php

namespace opengkh\gis\models\Nsi\common;
use gisgkh\types\lib\Nsi\NsiElementType;

/**
 * Абстрактный ограниченный по времени действия элемент справочника
 * @package opengkh\gis\models\Nsi
 */
abstract class GisNsiNonPermanentDirectoryEntry extends GisNsiDirectoryEntry
{
    /**
     * @var \DateTime $startDate Дата начала действия значения
     */
    public $startDate = null;

    /**
     * @var \DateTime $endDate Дата окончания действия значения
     */
    public $endDate = null;

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        $this->startDate = $source->getStartDate();
        $this->endDate = $source->getEndDate();
        return parent::fillFrom($source);
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        parent::fillTo($target);
        $target->setStartDate($this->startDate);
        $target->setEndDate($this->endDate);
    }
}