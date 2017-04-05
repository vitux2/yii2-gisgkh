<?php

namespace gisgkh\types\HouseManagement;

/**
 * Результат экспорта договоров ресурсоснабжения
 */
class exportSupplyResourceContractResultType extends \gisgkh\types\HouseManagement\ExportSupplyResourceContractType
{
    /**
     * Идентификатор договора ресурсоснабжения в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractRootGUID = null;

    /**
     * Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Состояние договора
     * 
     * @var string
     */
     public $ContractState = null;

    /**
     * Номер версии договора
     * 
     * @var string
     */
     public $VersionNumber = null;

    /**
     * Статус версии договора
     * 
     * @var string
     */
     public $VersionStatus = null;

    /**
     * Информация о расторжении
     * 
     * @var \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType\TerminateContract
     */
     public $TerminateContract = null;

    /**
     * Аннулирование 
     * 
     * @var \gisgkh\types\HouseManagement\AnnulmentType
     */
     public $AnnulmentContract = null;

    /**
     * @param string $ContractRootGUID Идентификатор договора ресурсоснабжения в ГИС ЖКХ 
     * @param string $ContractGUID Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * @param string $ContractState Состояние договора
     * @param string $VersionNumber Номер версии договора
     * @param string $VersionStatus Статус версии договора
     * @param \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType\TerminateContract [$TerminateContract] Информация о расторжении
     * @param \gisgkh\types\HouseManagement\AnnulmentType [$AnnulmentContract] Аннулирование 
     */
    public function __construct(string $ContractRootGUID = null, string $ContractGUID = null, string $ContractState = null, string $VersionNumber = null, string $VersionStatus = null, \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType\TerminateContract $TerminateContract = null, \gisgkh\types\HouseManagement\AnnulmentType $AnnulmentContract = null)
    {
        $this->ContractRootGUID = $ContractRootGUID;
        $this->ContractGUID = $ContractGUID;
        $this->ContractState = $ContractState;
        $this->VersionNumber = $VersionNumber;
        $this->VersionStatus = $VersionStatus;
        $this->TerminateContract = $TerminateContract;
        $this->AnnulmentContract = $AnnulmentContract;
    }
}