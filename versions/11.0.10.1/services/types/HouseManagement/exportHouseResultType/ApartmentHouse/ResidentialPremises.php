<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse;

/**
 * 
 */
class ResidentialPremises extends \gisgkh\types\HouseManagement\ResidentialPremisesExportType
{
    /**
     * Уникальный номер помещения
     * 
     * @var string
     */
     public $PremisesUniqueNumber = null;

    /**
     * Дата модификации данных помещения
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Комната в квартире коммунального заселения
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\ResidentialPremises\LivingRoom[]
     */
     public $LivingRoom = [];

    /**
     * Идентификатор помещения
     * 
     * @var string
     */
     public $PremisesGUID = null;

    /**
     * @param string $PremisesUniqueNumber Уникальный номер помещения
     * @param string $ModificationDate Дата модификации данных помещения
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\ResidentialPremises\LivingRoom[] [$LivingRoom] Комната в квартире коммунального заселения
     * @param string $PremisesGUID Идентификатор помещения
     */
    public function __construct(string $PremisesUniqueNumber = null, string $ModificationDate = null, array $LivingRoom = [], string $PremisesGUID = null)
    {
        $this->PremisesUniqueNumber = $PremisesUniqueNumber;
        $this->ModificationDate = $ModificationDate;
        $this->LivingRoom = $LivingRoom;
        $this->PremisesGUID = $PremisesGUID;
    }
}