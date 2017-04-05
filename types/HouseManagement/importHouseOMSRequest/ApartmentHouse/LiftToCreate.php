<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Добавление нового лифта
 */
class LiftToCreate extends \gisgkh\types\HouseManagement\LiftOMSType
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