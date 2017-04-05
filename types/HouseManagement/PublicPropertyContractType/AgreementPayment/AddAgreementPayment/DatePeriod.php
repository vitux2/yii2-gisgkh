<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment;

/**
 * Период
 */
class DatePeriod
{
    /**
     * 
     * 
     * @var string
     */
     public $DateFrom = null;

    /**
     * 
     * 
     * @var string
     */
     public $DateTo = null;

    /**
     * @param string $DateFrom 
     * @param string $DateTo 
     */
    public function __construct(string $DateFrom = null, string $DateTo = null)
    {
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
    }
}