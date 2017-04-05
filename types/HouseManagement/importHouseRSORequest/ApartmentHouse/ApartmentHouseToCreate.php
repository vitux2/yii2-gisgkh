<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse;

/**
 * Добавление многоквартирного дома
 */
class ApartmentHouseToCreate extends \gisgkh\types\HouseManagement\ApartmentHouseRSOType
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