<?php

namespace gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract;

/**
 * Период внесения платы по договору о предоставлении в пользование части общего имущества собственников помещений в многоквартирном доме
 */
class PaymentInterval
{
    /**
     * Начало периода
     * 
     * @var \gisgkh\types\HouseManagement\DaySelectionType
     */
     public $StartDate = null;

    /**
     * Окончание периода
     * 
     * @var \gisgkh\types\HouseManagement\DaySelectionType
     */
     public $EndDate = null;

    /**
     * @param \gisgkh\types\HouseManagement\DaySelectionType $StartDate Начало периода
     * @param \gisgkh\types\HouseManagement\DaySelectionType $EndDate Окончание периода
     */
    public function __construct(\gisgkh\types\HouseManagement\DaySelectionType $StartDate = null, \gisgkh\types\HouseManagement\DaySelectionType $EndDate = null)
    {
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
    }
}