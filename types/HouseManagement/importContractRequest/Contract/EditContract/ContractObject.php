<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract;

/**
 * Управляемый объект
 */
class ContractObject
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Добавление 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add
     */
     public $Add = null;

    /**
     * Изменение 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Edit
     */
     public $Edit = null;

    /**
     * Исключение
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Exclusion
     */
     public $Exclusion = null;

    /**
     * Аннулирование
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Annulment
     */
     public $Annulment = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add $Add Добавление 
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Edit $Edit Изменение 
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Exclusion $Exclusion Исключение
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Annulment $Annulment Аннулирование
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add $Add = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Edit $Edit = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Exclusion $Exclusion = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Annulment $Annulment = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->Add = $Add;
        $this->Edit = $Edit;
        $this->Exclusion = $Exclusion;
        $this->Annulment = $Annulment;
    }
}