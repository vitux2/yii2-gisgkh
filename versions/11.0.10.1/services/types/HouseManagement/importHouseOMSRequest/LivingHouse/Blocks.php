<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse;

/**
 * Блоки (для ЖД блокированной застройки)
 */
class Blocks
{
    /**
     * Создание блока
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToCreate
     */
     public $BlockToCreate = null;

    /**
     * Обновление блока
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToUpdate
     */
     public $BlockToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = [];

    /**
     * Обновление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = [];

    /**
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToCreate $BlockToCreate Создание блока
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToUpdate $BlockToUpdate Обновление блока
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\LivingRoomToUpdate[] [$LivingRoomToUpdate] Обновление комнаты
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToCreate $BlockToCreate = null, \gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks\BlockToUpdate $BlockToUpdate = null, array $LivingRoomToCreate = [], array $LivingRoomToUpdate = [])
    {
        $this->BlockToCreate = $BlockToCreate;
        $this->BlockToUpdate = $BlockToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
    }
}