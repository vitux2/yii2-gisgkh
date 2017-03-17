<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse;

/**
 * Изменение подъезда
 */
class EntranceToUpdate extends \gisgkh\types\HouseManagement\EntranceUpdateRSOType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор подъезда
     * 
     * @var string
     */
     public $EntranceGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $EntranceGUID Идентификатор подъезда
     */
    public function __construct(string $TransportGUID = null, string $EntranceGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->EntranceGUID = $EntranceGUID;
    }
}