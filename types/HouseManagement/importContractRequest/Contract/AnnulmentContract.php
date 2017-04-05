<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Аннулирование ДУ
 */
class AnnulmentContract extends \gisgkh\types\HouseManagement\AnnulmentType
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