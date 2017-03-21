<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse;

/**
 * Комнаты (для обычного жилого дома)
 */
class LivingRoom extends \gisgkh\types\HouseManagement\RoomExportType
{
    /**
     * Уникальный номер комнаты
     * 
     * @var string
     */
     public $LivingRoomUniqueNumber = null;

    /**
     * Дата модификации данных комнаты
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Идентификатор комнаты
     * 
     * @var string
     */
     public $LivingRoomGUID = null;

    /**
     * @param string $LivingRoomUniqueNumber Уникальный номер комнаты
     * @param string $ModificationDate Дата модификации данных комнаты
     * @param string $LivingRoomGUID Идентификатор комнаты
     */
    public function __construct(string $LivingRoomUniqueNumber = null, string $ModificationDate = null, string $LivingRoomGUID = null)
    {
        $this->LivingRoomUniqueNumber = $LivingRoomUniqueNumber;
        $this->ModificationDate = $ModificationDate;
        $this->LivingRoomGUID = $LivingRoomGUID;
    }
}