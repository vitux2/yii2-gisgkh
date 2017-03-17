<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest;

/**
 * Жилой дом
 */
class LivingHouse
{
    /**
     * Добавление жилого дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToCreate
     */
     public $LivingHouseToCreate = null;

    /**
     * Изменение данных жилого дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToUpdate
     */
     public $LivingHouseToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = [];

    /**
     * Обновление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = [];

    /**
     * Блоки (для ЖД блокированной застройки)
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\Blocks[]
     */
     public $Blocks = [];

    /**
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToCreate $LivingHouseToCreate Добавление жилого дома
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToUpdate $LivingHouseToUpdate Изменение данных жилого дома
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingRoomToUpdate[] [$LivingRoomToUpdate] Обновление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\Blocks[] [$Blocks] Блоки (для ЖД блокированной застройки)
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToCreate $LivingHouseToCreate = null, \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\LivingHouseToUpdate $LivingHouseToUpdate = null, array $LivingRoomToCreate = [], array $LivingRoomToUpdate = [], array $Blocks = [])
    {
        $this->LivingHouseToCreate = $LivingHouseToCreate;
        $this->LivingHouseToUpdate = $LivingHouseToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
        $this->Blocks = $Blocks;
    }
}