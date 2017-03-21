<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилой дом (для импорта от РСО)
 */
class LivingHouseRSOType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicRSOType
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicRSOType $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicRSOType $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}