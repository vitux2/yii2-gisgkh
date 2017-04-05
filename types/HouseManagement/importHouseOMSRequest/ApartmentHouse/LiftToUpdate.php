<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Изменение лифта
 */
class LiftToUpdate extends \gisgkh\types\HouseManagement\LiftUpdateOMSType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор лифта
     * 
     * @var string
     */
     public $LiftGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $LiftGUID Идентификатор лифта
     */
    public function __construct(string $TransportGUID = null, string $LiftGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->LiftGUID = $LiftGUID;
    }
}