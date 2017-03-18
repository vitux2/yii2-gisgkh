<?php

namespace gisgkh\types\HouseManagement;

/**
 * Блок дома блокированной застройки  (обновление данных для УО)
 */
class BlockUpdateUOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
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
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = null;

    /**
     * @param string $BlockNum Номер блока
     * @param \gisgkh\types\NsiBase\nsiRef [$PremisesCharacteristic] Характеристика помещения (НСИ 30)
     * @param string [$TotalArea] Общая площадь жилого помещения по паспорту помещения
     * @param string $GrossArea Жилая площадь жилого помещения по паспорту помещения
     * @param string $NoGrossArea Отсутствует значение жилой площади
     * @param string [$TerminationDate] Дата прекращения существования объекта
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $BlockNum = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null, string $GrossArea = null, string $NoGrossArea = null, string $TerminationDate = null, array $OGFData = null)
    {
        $this->BlockNum = $BlockNum;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
        $this->GrossArea = $GrossArea;
        $this->NoGrossArea = $NoGrossArea;
        $this->TerminationDate = $TerminationDate;
        $this->OGFData = $OGFData;
    }
}