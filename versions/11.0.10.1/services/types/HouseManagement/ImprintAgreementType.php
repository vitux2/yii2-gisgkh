<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class ImprintAgreementType
{
    /**
     * Номер
     * 
     * @var string
     */
     public $AgreementNumber = null;

    /**
     * Дата
     * 
     * @var string
     */
     public $AgreementDate = null;

    /**
     * @param string $AgreementNumber Номер
     * @param string $AgreementDate Дата
     */
    public function __construct(string $AgreementNumber = null, string $AgreementDate = null)
    {
        $this->AgreementNumber = $AgreementNumber;
        $this->AgreementDate = $AgreementDate;
    }
}