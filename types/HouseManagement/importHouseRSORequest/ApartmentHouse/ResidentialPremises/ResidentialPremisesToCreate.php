<?php

namespace gisgkh\types\HouseManagement\importHouseRSORequest\ApartmentHouse\ResidentialPremises;

/**
 * Добавление жилого помещения
 */
class ResidentialPremisesToCreate extends \gisgkh\types\HouseManagement\ResidentialPremisesRSOType
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