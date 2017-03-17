<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилой дом (обновление данных для УО)
 */
class LivingHouseUpdateUOType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicUpdateUOType
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicUpdateUOType $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicUpdateUOType $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}