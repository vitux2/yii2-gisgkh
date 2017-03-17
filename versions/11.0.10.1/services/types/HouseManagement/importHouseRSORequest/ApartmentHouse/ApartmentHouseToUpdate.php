<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse;

/**
 * Изменение данных многоквартирного дома
 */
class ApartmentHouseToUpdate extends \gisgkh\types\HouseManagement\ApartmentHouseUpdateRSOType
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