<?php

namespace gisgkh\types\HouseManagement;

/**
 * Многоквартирный дом (обновление данных для РСО)
 */
class ApartmentHouseUpdateRSOType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicUpdateRSOType
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicUpdateRSOType $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicUpdateRSOType $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}