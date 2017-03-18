<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest;

/**
 * Жилой дом
 */
class LivingHouse
{
    /**
     * Добавление жилого дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToCreate
     */
     public $LivingHouseToCreate = null;

    /**
     * Изменение данных жилого дома
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToUpdate
     */
     public $LivingHouseToUpdate = null;

    /**
     * Добавление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingRoomToCreate[]
     */
     public $LivingRoomToCreate = null;

    /**
     * Обновление комнаты
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingRoomToUpdate[]
     */
     public $LivingRoomToUpdate = null;

    /**
     * Блоки (для ЖД блокированной застройки)
     * 
     * @var \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks[]
     */
     public $Blocks = null;

    /**
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToCreate $LivingHouseToCreate Добавление жилого дома
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToUpdate $LivingHouseToUpdate Изменение данных жилого дома
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingRoomToCreate[] [$LivingRoomToCreate] Добавление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingRoomToUpdate[] [$LivingRoomToUpdate] Обновление комнаты
     * @param \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\Blocks[] [$Blocks] Блоки (для ЖД блокированной застройки)
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToCreate $LivingHouseToCreate = null, \gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse\LivingHouseToUpdate $LivingHouseToUpdate = null, array $LivingRoomToCreate = null, array $LivingRoomToUpdate = null, array $Blocks = null)
    {
        $this->LivingHouseToCreate = $LivingHouseToCreate;
        $this->LivingHouseToUpdate = $LivingHouseToUpdate;
        $this->LivingRoomToCreate = $LivingRoomToCreate;
        $this->LivingRoomToUpdate = $LivingRoomToUpdate;
        $this->Blocks = $Blocks;
    }
}