<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилой дом (обновление данных ОМС)
 */
class LivingHouseUpdateOMSType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicUpdateOMSType
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicUpdateOMSType $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicUpdateOMSType $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}