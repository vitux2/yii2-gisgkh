<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest;

/**
 * Многоквартирный дом
 */
class ApartmentHouse
{
    /**
     * Добавление многоквартирного дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToCreate
     */
     public $ApartmentHouseToCreate = null;

    /**
     * Изменение данных многоквартирного дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToUpdate
     */
     public $ApartmentHouseToUpdate = null;

    /**
     * Добавление нежилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\NonResidentialPremiseToCreate[]
     */
     public $NonResidentialPremiseToCreate = [];

    /**
     * Изменение данных нежилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\NonResidentialPremiseToUpdate[]
     */
     public $NonResidentialPremiseToUpdate = [];

    /**
     * Добавление нового подъезда
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\EntranceToCreate[]
     */
     public $EntranceToCreate = [];

    /**
     * Изменение подъезда
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\EntranceToUpdate[]
     */
     public $EntranceToUpdate = [];

    /**
     * Жилое помещение
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises[]
     */
     public $ResidentialPremises = [];

    /**
     * Добавление нового лифта
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\LiftToCreate[]
     */
     public $LiftToCreate = [];

    /**
     * Изменение лифта
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\LiftToUpdate[]
     */
     public $LiftToUpdate = [];

    /**
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToCreate $ApartmentHouseToCreate Добавление многоквартирного дома
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToUpdate $ApartmentHouseToUpdate Изменение данных многоквартирного дома
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\NonResidentialPremiseToCreate[] [$NonResidentialPremiseToCreate] Добавление нежилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\NonResidentialPremiseToUpdate[] [$NonResidentialPremiseToUpdate] Изменение данных нежилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\EntranceToCreate[] [$EntranceToCreate] Добавление нового подъезда
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\EntranceToUpdate[] [$EntranceToUpdate] Изменение подъезда
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises[] [$ResidentialPremises] Жилое помещение
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\LiftToCreate[] [$LiftToCreate] Добавление нового лифта
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\LiftToUpdate[] [$LiftToUpdate] Изменение лифта
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToCreate $ApartmentHouseToCreate = null, \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ApartmentHouseToUpdate $ApartmentHouseToUpdate = null, array $NonResidentialPremiseToCreate = [], array $NonResidentialPremiseToUpdate = [], array $EntranceToCreate = [], array $EntranceToUpdate = [], array $ResidentialPremises = [], array $LiftToCreate = [], array $LiftToUpdate = [])
    {
        $this->ApartmentHouseToCreate = $ApartmentHouseToCreate;
        $this->ApartmentHouseToUpdate = $ApartmentHouseToUpdate;
        $this->NonResidentialPremiseToCreate = $NonResidentialPremiseToCreate;
        $this->NonResidentialPremiseToUpdate = $NonResidentialPremiseToUpdate;
        $this->EntranceToCreate = $EntranceToCreate;
        $this->EntranceToUpdate = $EntranceToUpdate;
        $this->ResidentialPremises = $ResidentialPremises;
        $this->LiftToCreate = $LiftToCreate;
        $this->LiftToUpdate = $LiftToUpdate;
    }
}