<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse\ResidentialPremises;

/**
 * Изменение данных жилого помещения
 */
class ResidentialPremisesToUpdate extends \gisgkh\types\HouseManagement\ResidentialPremisesUpdateUOType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор помещения
     * 
     * @var string
     */
     public $PremisesGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $PremisesGUID Идентификатор помещения
     */
    public function __construct(string $TransportGUID = null, string $PremisesGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->PremisesGUID = $PremisesGUID;
    }
}