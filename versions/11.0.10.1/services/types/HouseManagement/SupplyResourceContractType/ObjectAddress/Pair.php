<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress;

/**
 * Пара: коммунальная услуга и коммунальный ресурс
 */
class Pair
{
    /**
     * Ссылка на пару из коммунальной услуги и ресурса из предмета договора
     * 
     * @var string
     */
     public $PairKey = null;

    /**
     * Дата начала поставки ресурса
     * 
     * @var string
     */
     public $StartSupplyDate = null;

    /**
     * Дата окончания поставки ресурса
     * 
     * @var string
     */
     public $EndSupplyDate = null;

    /**
     * Тип системы теплоснабжения (заполняется для коммунальных ресурсов "Тепловая энергия" и "Горячая вода")
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress\Pair\HeatingSystemType
     */
     public $HeatingSystemType = null;

    /**
     * @param string $PairKey Ссылка на пару из коммунальной услуги и ресурса из предмета договора
     * @param string $StartSupplyDate Дата начала поставки ресурса
     * @param string $EndSupplyDate Дата окончания поставки ресурса
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress\Pair\HeatingSystemType [$HeatingSystemType] Тип системы теплоснабжения (заполняется для коммунальных ресурсов "Тепловая энергия" и "Горячая вода")
     */
    public function __construct(string $PairKey = null, string $StartSupplyDate = null, string $EndSupplyDate = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress\Pair\HeatingSystemType $HeatingSystemType = null)
    {
        $this->PairKey = $PairKey;
        $this->StartSupplyDate = $StartSupplyDate;
        $this->EndSupplyDate = $EndSupplyDate;
        $this->HeatingSystemType = $HeatingSystemType;
    }
}