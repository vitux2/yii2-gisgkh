<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType;

/**
 * Период сдачи текущих показаний по ПУ. Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
 */
class Period
{
    /**
     * Начало периода
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\Period\Start
     */
     public $Start = null;

    /**
     * Конец периода
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\Period\End
     */
     public $End = null;

    /**
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\Period\Start $Start Начало периода
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\Period\End $End Конец периода
     */
    public function __construct(\gisgkh\types\HouseManagement\SupplyResourceContractType\Period\Start $Start = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\Period\End $End = null)
    {
        $this->Start = $Start;
        $this->End = $End;
    }
}