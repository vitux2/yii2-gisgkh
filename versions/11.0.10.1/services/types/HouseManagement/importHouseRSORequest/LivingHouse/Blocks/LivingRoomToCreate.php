<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks;

/**
 * Добавление комнаты
 */
class LivingRoomToCreate extends \gisgkh\types\HouseManagement\RoomRSOType
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