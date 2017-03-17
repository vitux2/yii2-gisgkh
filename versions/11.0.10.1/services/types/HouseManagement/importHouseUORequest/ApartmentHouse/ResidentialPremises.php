<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse;

/**
 * Жилое помещение
 */
class ResidentialPremises
{
    /**
     * Добавление жилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate
     */
     public $ResidentialPremisesToCreate = null;

    /**
     * Изменение данных жилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate
     */
     public $ResidentialPremisesToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = [];

    /**
     * Изменение комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = [];

    /**
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate $ResidentialPremisesToCreate Добавление жилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate $ResidentialPremisesToUpdate Изменение данных жилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\LivingRoomToUpdate[] [$LivingRoomToUpdate] Изменение комнаты
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate $ResidentialPremisesToCreate = null, \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate $ResidentialPremisesToUpdate = null, array $LivingRoomToCreate = [], array $LivingRoomToUpdate = [])
    {
        $this->ResidentialPremisesToCreate = $ResidentialPremisesToCreate;
        $this->ResidentialPremisesToUpdate = $ResidentialPremisesToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
    }
}