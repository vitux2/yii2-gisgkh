<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse;

/**
 * Добавление комнаты
 */
class LivingRoomToCreate extends \gisgkh\types\HouseManagement\RoomOMSType
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