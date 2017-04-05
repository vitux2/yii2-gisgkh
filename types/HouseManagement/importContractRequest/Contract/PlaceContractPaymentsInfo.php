<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Размещение сведений о размере платы 
 */
class PlaceContractPaymentsInfo extends \gisgkh\types\HouseManagement\ContractPaymentsInfoType
{
    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * @param string $ContractVersionGUID Идентификатор версии договора
     */
    public function __construct(string $ContractVersionGUID = null)
    {
        $this->ContractVersionGUID = $ContractVersionGUID;
    }
}