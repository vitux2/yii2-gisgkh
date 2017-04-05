<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises;

/**
 * Добавление комнаты
 */
class LivingRoomToCreate extends \gisgkh\types\HouseManagement\RoomUOType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     */
    public function __construct(string $TransportGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
    }
}