<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Плановый объем поставки ресурсов и режим подачи за год
 * @package gisgkh\types\HouseManagement
 */
class PlannedVolume extends GisgkhType
{
    /**
     * @var string $Volume Плановый объем, decimal
     */
    public $Volume = null;

    /**
     * @var string $Unit Единица измерения. Номер из справочника НСИ №236 "Связь вида коммунальной услуги, тарифицируемого ресурса и единиц измерения ставки тарифа"
     */
    public $Unit = null;

    /**
     * @var string $FeedingMode Режим подачи, до 250 символов
     */
    public $FeedingMode = null;
}