<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Утверждение ДУ, в отношении которого были одобрены заявки на включение управляемых объектов в РЛ
 */
class ApprovalContract extends \gisgkh\types\HouseManagement\ApprovalType
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