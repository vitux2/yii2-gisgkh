<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики общеквартирного ПУ (для квартир коммунального заселения) (значение справочника "Вид прибора учета" = Общий (квартирный))
 */
class CollectiveApartmentDevice
{
    /**
     * Идентификатор жилого помещения
     * 
     * @var string
     */
     public $PremiseGUID = null;

    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = null;

    /**
     * @param string $PremiseGUID Идентификатор жилого помещения
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(string $PremiseGUID = null, array $AccountGUID = null)
    {
        $this->PremiseGUID = $PremiseGUID;
        $this->AccountGUID = $AccountGUID;
    }
}