<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons;

/**
 * 
 */
class Contract
{
    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     */
    public function __construct(string $ContractGUID = null)
    {
        $this->ContractGUID = $ContractGUID;
    }
}