<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse;

/**
 * Добавление нежилого помещения
 */
class NonResidentialPremiseToCreate extends \gisgkh\types\HouseManagement\NonResidentialPremisesRSOType
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