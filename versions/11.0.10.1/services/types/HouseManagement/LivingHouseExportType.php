<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилой дом (для экспорта)
 */
class LivingHouseExportType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicExportType
     */
     public $BasicCharacteristicts = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicExportType $BasicCharacteristicts Основные характеристики
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicExportType $BasicCharacteristicts = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
    }
}