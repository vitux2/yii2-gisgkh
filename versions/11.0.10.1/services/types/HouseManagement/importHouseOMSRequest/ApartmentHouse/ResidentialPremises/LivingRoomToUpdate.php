<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises;

/**
 * Изменение комнаты
 */
class LivingRoomToUpdate extends \gisgkh\types\HouseManagement\RoomUpdateOMSType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор комнаты
     * 
     * @var string
     */
     public $LivingRoomGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $LivingRoomGUID Идентификатор комнаты
     */
    public function __construct(string $TransportGUID = null, string $LivingRoomGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->LivingRoomGUID = $LivingRoomGUID;
    }
}