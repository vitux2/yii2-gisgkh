<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportHouseResultType
{
    /**
     * Уникальный номер дома
     * 
     * @var string
     */
     public $HouseUniqueNumber = null;

    /**
     * Дата модификации данных дома
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Многоквартирный дом
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse
     */
     public $ApartmentHouse = null;

    /**
     * Жилой дом
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse
     */
     public $LivingHouse = null;

    /**
     * @param string $HouseUniqueNumber Уникальный номер дома
     * @param string $ModificationDate Дата модификации данных дома
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse $ApartmentHouse Многоквартирный дом
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse $LivingHouse Жилой дом
     */
    public function __construct(string $HouseUniqueNumber = null, string $ModificationDate = null, \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse $ApartmentHouse = null, \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse $LivingHouse = null)
    {
        $this->HouseUniqueNumber = $HouseUniqueNumber;
        $this->ModificationDate = $ModificationDate;
        $this->ApartmentHouse = $ApartmentHouse;
        $this->LivingHouse = $LivingHouse;
    }
}