<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType;

/**
 * Жилой дом
 */
class LivingHouse extends \gisgkh\types\HouseManagement\LivingHouseExportType
{
    /**
     * Комнаты (для обычного жилого дома)
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\LivingRoom[]
     */
     public $LivingRoom = [];

    /**
     * Блоки (для жилого дома блокированной застройки)
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\Block[]
     */
     public $Block = [];

    /**
     * Актуальная версия сведений о доме
     * 
     * @var string
     */
     public $HouseGUID = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\LivingRoom[] [$LivingRoom] Комнаты (для обычного жилого дома)
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\Block[] [$Block] Блоки (для жилого дома блокированной застройки)
     * @param string $HouseGUID Актуальная версия сведений о доме
     */
    public function __construct(array $LivingRoom = [], array $Block = [], string $HouseGUID = null)
    {
        $this->LivingRoom = $LivingRoom;
        $this->Block = $Block;
        $this->HouseGUID = $HouseGUID;
    }
}