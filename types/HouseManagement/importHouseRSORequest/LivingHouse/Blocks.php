<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse;

/**
 * Блоки (для ЖД блокированной застройки)
 */
class Blocks
{
    /**
     * Создание блока
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToCreate
     */
     public $BlockToCreate = null;

    /**
     * Обновление блока
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToUpdate
     */
     public $BlockToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = null;

    /**
     * Обновление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = null;

    /**
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToCreate $BlockToCreate Создание блока
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToUpdate $BlockToUpdate Обновление блока
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\LivingRoomToUpdate[] [$LivingRoomToUpdate] Обновление комнаты
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToCreate $BlockToCreate = null, \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks\BlockToUpdate $BlockToUpdate = null, array $LivingRoomToCreate = null, array $LivingRoomToUpdate = null)
    {
        $this->BlockToCreate = $BlockToCreate;
        $this->BlockToUpdate = $BlockToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
    }
}