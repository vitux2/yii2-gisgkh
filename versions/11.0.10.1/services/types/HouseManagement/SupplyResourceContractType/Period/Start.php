<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType\Period;

/**
 * Начало периода
 */
class Start
{
    /**
     * Дата начала
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Следующего месяца
     * 
     * @var string
     */
     public $NextMonth = null;

    /**
     * @param string $StartDate Дата начала
     * @param string [$NextMonth] Следующего месяца
     */
    public function __construct(string $StartDate = null, string $NextMonth = null)
    {
        $this->StartDate = $StartDate;
        $this->NextMonth = $NextMonth;
    }
}