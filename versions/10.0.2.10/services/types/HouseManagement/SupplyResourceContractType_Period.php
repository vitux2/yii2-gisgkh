<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Период сдачи текущих показаний по ПУ. Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_Period extends GisgkhType
{
    /**
     * @var SupplyResourceContractType_Period_Start $Start Начало периода
     */
    public $Start = null;

    /**
     * @var SupplyResourceContractType_Period_End $End Конец периода
     */
    public $End = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->Start = new SupplyResourceContractType_Period_Start();
        $this->End = new SupplyResourceContractType_Period_End();
    }
}