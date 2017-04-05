<?php

namespace gisgkh\types\HouseManagement;

/**
 * Блок дома блокированной застройки  (обновление данных для РСО)
 */
class BlockUpdateRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
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
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string $BlockNum Номер блока
     * @param \gisgkh\types\NsiBase\nsiRef [$PremisesCharacteristic] Характеристика помещения (НСИ 30)
     * @param string [$TotalArea] Общая площадь жилого помещения по паспорту помещения
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $BlockNum = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null, string $TerminationDate = null)
    {
        $this->BlockNum = $BlockNum;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
        $this->TerminationDate = $TerminationDate;
    }
}