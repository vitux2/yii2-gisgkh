<?php

namespace gisgkh\types\HouseManagement\ContractSubjectType;

/**
 * Плановый объем и режим подачи за год
 */
class PlannedVolume
{
    /**
     * Плановый объем
     * 
     * @var string
     */
     public $Volume = null;

    /**
     * Единица измерения.
справочника НСИ №236 "Связь вида коммунальной услуги, тарифицируемого ресурса и единиц измерения ставки тарифа" 
     * 
     * @var string
     */
     public $Unit = null;

    /**
     * Режим подачи
     * 
     * @var string
     */
     public $FeedingMode = null;

    /**
     * @param string $Volume Плановый объем
     * @param string $Unit Единица измерения.
справочника НСИ №236 "Связь вида коммунальной услуги, тарифицируемого ресурса и единиц измерения ставки тарифа" 
     * @param string $FeedingMode Режим подачи
     */
    public function __construct(string $Volume = null, string $Unit = null, string $FeedingMode = null)
    {
        $this->Volume = $Volume;
        $this->Unit = $Unit;
        $this->FeedingMode = $FeedingMode;
    }
}