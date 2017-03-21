<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse;

/**
 * Изменение данных многоквартирного дома
 */
class ApartmentHouseToUpdate extends \gisgkh\types\HouseManagement\ApartmentHouseUpdateUOType
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