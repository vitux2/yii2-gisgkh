<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Добавление нового подъезда
 */
class EntranceToCreate extends \gisgkh\types\HouseManagement\EntranceOMSType
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