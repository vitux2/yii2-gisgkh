<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse\ResidentialPremises;

/**
 * Добавление жилого помещения
 */
class ResidentialPremisesToCreate extends \gisgkh\types\HouseManagement\ResidentialPremisesOMSType
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