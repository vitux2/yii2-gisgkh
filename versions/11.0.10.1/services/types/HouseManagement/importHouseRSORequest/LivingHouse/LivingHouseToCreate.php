<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\LivingHouse;

/**
 * Добавление жилого дома
 */
class LivingHouseToCreate extends \gisgkh\types\HouseManagement\LivingHouseRSOType
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