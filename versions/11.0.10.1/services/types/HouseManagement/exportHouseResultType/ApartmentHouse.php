<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType;

/**
 * Многоквартирный дом
 */
class ApartmentHouse extends \gisgkh\types\HouseManagement\ApartmentHouseExportType
{
    /**
     * Подъезд
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\Entrance[]
     */
     public $Entrance = null;

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\ResidentialPremises[]
     */
     public $ResidentialPremises = null;

    /**
     * Лифты
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\Lift[]
     */
     public $Lift = null;

    /**
     * Нежилое помещение
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\NonResidentialPremises[]
     */
     public $NonResidentialPremises = null;

    /**
     * Cпособ управления домом (НСИ 25). 
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $HouseManagementType = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\Entrance[] [$Entrance] Подъезд
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\ResidentialPremises[] [$ResidentialPremises] 
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\Lift[] [$Lift] Лифты
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse\NonResidentialPremises[] [$NonResidentialPremises] Нежилое помещение
     * @param \gisgkh\types\NsiBase\nsiRef [$HouseManagementType] Cпособ управления домом (НСИ 25). 
     */
    public function __construct(array $Entrance = null, array $ResidentialPremises = null, array $Lift = null, array $NonResidentialPremises = null, \gisgkh\types\NsiBase\nsiRef $HouseManagementType = null)
    {
        $this->Entrance = $Entrance;
        $this->ResidentialPremises = $ResidentialPremises;
        $this->Lift = $Lift;
        $this->NonResidentialPremises = $NonResidentialPremises;
        $this->HouseManagementType = $HouseManagementType;
    }
}