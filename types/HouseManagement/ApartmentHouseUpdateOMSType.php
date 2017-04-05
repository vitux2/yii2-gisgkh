<?php

namespace gisgkh\types\HouseManagement;

/**
 * Многоквартирный дом (обновление данных для ОМС)
 */
class ApartmentHouseUpdateOMSType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicUpdateOMSType
     */
     public $BasicCharacteristicts = null;

    /**
     * Количество подземных этажей
     * 
     * @var string
     */
     public $UndergroundFloorCount = null;

    /**
     * Количество этажей, наименьшее 
     * 
     * @var string
     */
     public $MinFloorCount = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicUpdateOMSType $BasicCharacteristicts Основные характеристики
     * @param string [$UndergroundFloorCount] Количество подземных этажей
     * @param string [$MinFloorCount] Количество этажей, наименьшее 
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicUpdateOMSType $BasicCharacteristicts = null, string $UndergroundFloorCount = null, string $MinFloorCount = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
        $this->UndergroundFloorCount = $UndergroundFloorCount;
        $this->MinFloorCount = $MinFloorCount;
    }
}