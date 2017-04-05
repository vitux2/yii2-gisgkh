<?php

namespace gisgkh\types\HouseManagement;

/**
 * Блок дома блокированной застройки  (для импорта от РСО)
 */
class BlockRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Номер блока
     * 
     * @var string
     */
     public $BlockNum = null;

    /**
     * Характеристика помещения (НСИ 30)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $PremisesCharacteristic = null;

    /**
     * Общая площадь жилого помещения по паспорту помещения
     * 
     * @var string
     */
     public $TotalArea = null;

    /**
     * @param string $BlockNum Номер блока
     * @param \gisgkh\types\NsiBase\nsiRef [$PremisesCharacteristic] Характеристика помещения (НСИ 30)
     * @param string [$TotalArea] Общая площадь жилого помещения по паспорту помещения
     */
    public function __construct(string $BlockNum = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null)
    {
        $this->BlockNum = $BlockNum;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
    }
}