<?php

namespace gisgkh\types\HouseManagement\importSupplyResourceContractRequest;

/**
 * Договор ресурсоснабжения
 */
class Contract
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Создание/изменение
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType
     */
     public $SupplyResourceContract = null;

    /**
     * Расторжение
     * 
     * @var \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\TerminateContract
     */
     public $TerminateContract = null;

    /**
     * Пролонгация
     * 
     * @var \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\RollOverContract
     */
     public $RollOverContract = null;

    /**
     * Аннулирование 
     * 
     * @var \gisgkh\types\HouseManagement\AnnulmentType
     */
     public $AnnulmentContract = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$ContractGUID] Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType $SupplyResourceContract Создание/изменение
     * @param \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\TerminateContract $TerminateContract Расторжение
     * @param \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\RollOverContract $RollOverContract Пролонгация
     * @param \gisgkh\types\HouseManagement\AnnulmentType $AnnulmentContract Аннулирование 
     */
    public function __construct(string $TransportGUID = null, string $ContractGUID = null, \gisgkh\types\HouseManagement\SupplyResourceContractType $SupplyResourceContract = null, \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\TerminateContract $TerminateContract = null, \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\RollOverContract $RollOverContract = null, \gisgkh\types\HouseManagement\AnnulmentType $AnnulmentContract = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->ContractGUID = $ContractGUID;
        $this->SupplyResourceContract = $SupplyResourceContract;
        $this->TerminateContract = $TerminateContract;
        $this->RollOverContract = $RollOverContract;
        $this->AnnulmentContract = $AnnulmentContract;
    }
}