<?php

namespace gisgkh\types\AccountBase;

/**
 * Основание для обязательств по оплате
 */
class PaymentReasonType
{
    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата заключения договора
     * 
     * @var string
     */
     public $ContractDate = null;

    /**
     * Срок окончания действия договора
     * 
     * @var string
     */
     public $ContractEndDate = null;

    /**
     * @param string $ContractNumber Номер договора
     * @param string $ContractDate Дата заключения договора
     * @param string $ContractEndDate Срок окончания действия договора
     */
    public function __construct(string $ContractNumber = null, string $ContractDate = null, string $ContractEndDate = null)
    {
        $this->ContractNumber = $ContractNumber;
        $this->ContractDate = $ContractDate;
        $this->ContractEndDate = $ContractEndDate;
    }
}