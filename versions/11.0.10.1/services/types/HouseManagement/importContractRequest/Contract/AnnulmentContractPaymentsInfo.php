<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Аннулирование сведений о размере платы 
 */
class AnnulmentContractPaymentsInfo
{
    /**
     * Идентификатор версии сведений о размере платы по ДУ
     * 
     * @var string
     */
     public $ContractPaymentsInfoVersionGUID = null;

    /**
     * 
     * 
     * @var string
     */
     public $Reason = null;

    /**
     * @param string $ContractPaymentsInfoVersionGUID Идентификатор версии сведений о размере платы по ДУ
     * @param string $Reason 
     */
    public function __construct(string $ContractPaymentsInfoVersionGUID = null, string $Reason = null)
    {
        $this->ContractPaymentsInfoVersionGUID = $ContractPaymentsInfoVersionGUID;
        $this->Reason = $Reason;
    }
}