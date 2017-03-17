<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse;

/**
 * Добавление нежилого помещения
 */
class NonResidentialPremiseToCreate extends \gisgkh\types\HouseManagement\NonResidentialPremisesUOType
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