<?php

namespace opengkh\gis\models\Nsi\common;
use gisgkh\types\NsiBase\NsiElementType;

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
        $this->startDate = new \DateTime($source->StartDate);
        $this->endDate = new \DateTime($source->EndDate);
        return parent::fillFrom($source);
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        parent::fillTo($target);
        $target->StartDate = $this->startDate->format(DATE_ATOM);
        $target->EndDate = $this->endDate->format(DATE_ATOM);
    }
}