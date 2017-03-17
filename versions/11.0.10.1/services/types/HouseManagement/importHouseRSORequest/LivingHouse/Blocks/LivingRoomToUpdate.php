<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks;

/**
 * Обновление комнаты
 */
class LivingRoomToUpdate extends \gisgkh\types\HouseManagement\RoomUpdateRSOType
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