<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse;

/**
 * Изменение данных жилого дома
 */
class LivingHouseToUpdate extends \gisgkh\types\HouseManagement\LivingHouseUpdateUOType
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