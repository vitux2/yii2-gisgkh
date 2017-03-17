<?php

namespace gisgkh\types\HouseManagement;

/**
 * Нежилое помещение (для импорта от РСО)
 */
class NonResidentialPremisesRSOType extends \gisgkh\types\HouseManagement\PremisesBasicRSOType
{
    /**
     * ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * 
     * @var string
     */
     public $FIASChildHouseGuid = null;

    /**
     * Общая площадь нежилого помещения по паспорту помещения
     * 
     * @var string
     */
     public $TotalArea = null;

    /**
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param string [$TotalArea] Общая площадь нежилого помещения по паспорту помещения
     */
    public function __construct(string $FIASChildHouseGuid = null, string $TotalArea = null)
    {
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->TotalArea = $TotalArea;
    }
}