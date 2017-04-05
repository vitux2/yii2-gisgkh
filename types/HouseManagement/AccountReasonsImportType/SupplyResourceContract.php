<?php

namespace gisgkh\types\HouseManagement\AccountReasonsImportType;

/**
 * 
 */
class SupplyResourceContract
{
    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата заключения
     * 
     * @var string
     */
     public $SigningDate = null;

    /**
     * True, если договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * 
     * @var string
     */
     public $IsContract = null;

    /**
     * @param string [$ContractGUID] Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractNumber Номер договора
     * @param string $SigningDate Дата заключения
     * @param string $IsContract True, если договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     */
    public function __construct(string $ContractGUID = null, string $ContractNumber = null, string $SigningDate = null, string $IsContract = null)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ContractNumber = $ContractNumber;
        $this->SigningDate = $SigningDate;
        $this->IsContract = $IsContract;
    }
}