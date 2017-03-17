<?php

namespace gisgkh\types\HouseManagement;

/**
 * Блок дома блокированной застройки  (для импорта от ОМС)
 */
class BlockOMSType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
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
     * Жилая площадь жилого помещения по паспорту помещения
     * 
     * @var string
     */
     public $GrossArea = null;

    /**
     * Отсутствует значение жилой площади
     * 
     * @var string
     */
     public $NoGrossArea = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = [];

    /**
     * @param string $BlockNum Номер блока
     * @param \gisgkh\types\NsiBase\nsiRef [$PremisesCharacteristic] Характеристика помещения (НСИ 30)
     * @param string $TotalArea Общая площадь жилого помещения по паспорту помещения
     * @param string $GrossArea Жилая площадь жилого помещения по паспорту помещения
     * @param string $NoGrossArea Отсутствует значение жилой площади
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $BlockNum = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null, string $GrossArea = null, string $NoGrossArea = null, array $OGFData = [])
    {
        $this->BlockNum = $BlockNum;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
        $this->GrossArea = $GrossArea;
        $this->NoGrossArea = $NoGrossArea;
        $this->OGFData = $OGFData;
    }
}