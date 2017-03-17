<?php

namespace gisgkh\types\HouseManagement\CharterDateDetailsType;

/**
 * Сроки передачи показаний индивидуальных и общих (квартирных) приборов учета с указанием даты начала и даты окончания периода передачи показаний
 */
class PeriodMetering
{
    /**
     * Начало периода ввода показаний ПУ
     * 
     * @var \gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType
     */
     public $StartDate = null;

    /**
     * Окончание периода ввода показаний ПУ
     * 
     * @var \gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType
     */
     public $EndDate = null;

    /**
     * @param \gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType $StartDate Начало периода ввода показаний ПУ
     * @param \gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType $EndDate Окончание периода ввода показаний ПУ
     */
    public function __construct(\gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType $StartDate = null, \gisgkh\types\HouseManagement\DeviceMeteringsDaySelectionType $EndDate = null)
    {
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
    }
}