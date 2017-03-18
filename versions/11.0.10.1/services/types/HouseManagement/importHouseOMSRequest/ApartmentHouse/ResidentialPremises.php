<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Жилое помещение
 */
class ResidentialPremises
{
    /**
     * Добавление жилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate
     */
     public $ResidentialPremisesToCreate = null;

    /**
     * Изменение данных жилого помещения
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate
     */
     public $ResidentialPremisesToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = null;

    /**
     * Изменение комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = null;

    /**
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate $ResidentialPremisesToCreate Добавление жилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate $ResidentialPremisesToUpdate Изменение данных жилого помещения
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\LivingRoomToUpdate[] [$LivingRoomToUpdate] Изменение комнаты
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToCreate $ResidentialPremisesToCreate = null, \gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises\ResidentialPremisesToUpdate $ResidentialPremisesToUpdate = null, array $LivingRoomToCreate = null, array $LivingRoomToUpdate = null)
    {
        $this->ResidentialPremisesToCreate = $ResidentialPremisesToCreate;
        $this->ResidentialPremisesToUpdate = $ResidentialPremisesToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
    }
}