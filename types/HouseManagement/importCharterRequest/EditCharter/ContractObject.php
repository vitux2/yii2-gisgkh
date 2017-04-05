<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter;

/**
 * Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
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
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add
     */
     public $Add = null;

    /**
     * Изменение
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit
     */
     public $Edit = null;

    /**
     * Исключение
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Exclusion
     */
     public $Exclusion = null;

    /**
     * Аннулирование
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Annulment
     */
     public $Annulment = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add $Add Добавление
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit $Edit Изменение
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Exclusion $Exclusion Исключение
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Annulment $Annulment Аннулирование
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add $Add = null, \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit $Edit = null, \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Exclusion $Exclusion = null, \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Annulment $Annulment = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->Add = $Add;
        $this->Edit = $Edit;
        $this->Exclusion = $Exclusion;
        $this->Annulment = $Annulment;
    }
}