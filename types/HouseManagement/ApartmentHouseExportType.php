<?php

namespace gisgkh\types\HouseManagement;

/**
 * Многоквартирный дом (для экспорта)
 */
class ApartmentHouseExportType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\HouseBasicExportType
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
     * Способ формирования фонда капитального ремонта (НСИ 241)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $OverhaulFormingKind = null;

    /**
     * @param \gisgkh\types\HouseManagement\HouseBasicExportType $BasicCharacteristicts Основные характеристики
     * @param string [$UndergroundFloorCount] Количество подземных этажей
     * @param string [$MinFloorCount] Количество этажей, наименьшее 
     * @param \gisgkh\types\NsiBase\nsiRef [$OverhaulFormingKind] Способ формирования фонда капитального ремонта (НСИ 241)
     */
    public function __construct(\gisgkh\types\HouseManagement\HouseBasicExportType $BasicCharacteristicts = null, string $UndergroundFloorCount = null, string $MinFloorCount = null, \gisgkh\types\NsiBase\nsiRef $OverhaulFormingKind = null)
    {
        $this->BasicCharacteristicts = $BasicCharacteristicts;
        $this->UndergroundFloorCount = $UndergroundFloorCount;
        $this->MinFloorCount = $MinFloorCount;
        $this->OverhaulFormingKind = $OverhaulFormingKind;
    }
}