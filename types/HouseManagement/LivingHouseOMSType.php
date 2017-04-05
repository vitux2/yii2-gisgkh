<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилой дом (для импорта от ОМС)
 */
class LivingHouseOMSType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\LivingHouseOMSType\BasicCharacteristicts
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\LivingHouseOMSType\BasicCharacteristicts $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\LivingHouseOMSType\BasicCharacteristicts $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}