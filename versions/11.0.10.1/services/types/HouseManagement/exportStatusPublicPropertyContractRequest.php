<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт ДОГПОИ
 */
class exportStatusPublicPropertyContractRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата начала действия договора
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Дата окончания действия договора
     * 
     * @var string
     */
     public $EndDate = null;

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
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param string [$FIASHouseGuid] Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$ContractNumber] Номер договора
     * @param string [$StartDate] Дата начала действия договора
     * @param string [$EndDate] Дата окончания действия договора
     * @param string [$ContractGUID] Корневой идентификатор договора (не меняется от версии к версии)
     * @param string [$ContractVersionGUID] Идентификатор версии договора
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $FIASHouseGuid = null, string $ContractNumber = null, string $StartDate = null, string $EndDate = null, string $ContractGUID = null, string $ContractVersionGUID = null, $version = "10.0.2.1")
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ContractNumber = $ContractNumber;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->ContractGUID = $ContractGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->version = $version;
    }
}