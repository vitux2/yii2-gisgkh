<?php

namespace gisgkh\types\HouseManagement;

/**
 * Нежилое помещение (обновление данных для ОМС)
 */
class NonResidentialPremisesUpdateOMSType extends \gisgkh\types\HouseManagement\PremisesBasicUpdateOMSType
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
     * Помещение, составляющее общее имущество в многоквартирном доме
     * 
     * @var string
     */
     public $IsCommonProperty = null;

    /**
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param string [$TotalArea] Общая площадь нежилого помещения по паспорту помещения
     * @param string [$IsCommonProperty] Помещение, составляющее общее имущество в многоквартирном доме
     */
    public function __construct(string $FIASChildHouseGuid = null, string $TotalArea = null, string $IsCommonProperty = null)
    {
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->TotalArea = $TotalArea;
        $this->IsCommonProperty = $IsCommonProperty;
    }
}