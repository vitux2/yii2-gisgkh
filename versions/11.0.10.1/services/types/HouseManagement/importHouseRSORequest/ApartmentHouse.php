<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest;

/**
 * Многоквартирный дом
 */
class ApartmentHouse
{
    /**
     * Добавление многоквартирного дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToCreate
     */
     public $ApartmentHouseToCreate = null;

    /**
     * Изменение данных многоквартирного дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToUpdate
     */
     public $ApartmentHouseToUpdate = null;

    /**
     * Добавление нежилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\NonResidentialPremiseToCreate[]
     */
     public $NonResidentialPremiseToCreate = [];

    /**
     * Изменение данных нежилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\NonResidentialPremiseToUpdate[]
     */
     public $NonResidentialPremiseToUpdate = [];

    /**
     * Добавление нового подъезда
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\EntranceToCreate[]
     */
     public $EntranceToCreate = [];

    /**
     * Изменение подъезда
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\EntranceToUpdate[]
     */
     public $EntranceToUpdate = [];

    /**
     * Жилое помещение
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ResidentialPremises[]
     */
     public $ResidentialPremises = [];

    /**
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToCreate $ApartmentHouseToCreate Добавление многоквартирного дома
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToUpdate $ApartmentHouseToUpdate Изменение данных многоквартирного дома
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\NonResidentialPremiseToCreate[] [$NonResidentialPremiseToCreate] Добавление нежилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\NonResidentialPremiseToUpdate[] [$NonResidentialPremiseToUpdate] Изменение данных нежилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\EntranceToCreate[] [$EntranceToCreate] Добавление нового подъезда
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\EntranceToUpdate[] [$EntranceToUpdate] Изменение подъезда
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ResidentialPremises[] [$ResidentialPremises] Жилое помещение
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToCreate $ApartmentHouseToCreate = null, \gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ApartmentHouseToUpdate $ApartmentHouseToUpdate = null, array $NonResidentialPremiseToCreate = [], array $NonResidentialPremiseToUpdate = [], array $EntranceToCreate = [], array $EntranceToUpdate = [], array $ResidentialPremises = [])
    {
        $this->ApartmentHouseToCreate = $ApartmentHouseToCreate;
        $this->ApartmentHouseToUpdate = $ApartmentHouseToUpdate;
        $this->NonResidentialPremiseToCreate = $NonResidentialPremiseToCreate;
        $this->NonResidentialPremiseToUpdate = $NonResidentialPremiseToUpdate;
        $this->EntranceToCreate = $EntranceToCreate;
        $this->EntranceToUpdate = $EntranceToUpdate;
        $this->ResidentialPremises = $ResidentialPremises;
    }
}