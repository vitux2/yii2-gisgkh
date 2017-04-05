<?php

namespace gisgkh\types\HouseManagement\exportStatusCAChRequest;

/**
 * 
 */
class Criteria
{
    /**
     * Корневой идентификатор устава (не меняется от версии к версии)
     * 
     * @var string
     */
     public $CharterGUID = null;

    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * @param string $CharterGUID Корневой идентификатор устава (не меняется от версии к версии)
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     */
    public function __construct(string $CharterGUID = null, string $ContractGUID = null, string $ContractVersionGUID = null, string $CharterVersionGUID = null)
    {
        $this->CharterGUID = $CharterGUID;
        $this->ContractGUID = $ContractGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->CharterVersionGUID = $CharterVersionGUID;
    }
}