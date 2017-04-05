<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress\Pair;

/**
 * Тип системы теплоснабжения (заполняется для коммунальных ресурсов "Тепловая энергия" и "Горячая вода")
 */
class HeatingSystemType
{
    /**
     * Открытая/Закрытая
     * 
     * @var string
     */
     public $OpenOrNot = null;

    /**
     * Централизованная/нецентрализованная
     * 
     * @var string
     */
     public $CentralizedOrNot = null;

    /**
     * @param string $OpenOrNot Открытая/Закрытая
     * @param string $CentralizedOrNot Централизованная/нецентрализованная
     */
    public function __construct(string $OpenOrNot = null, string $CentralizedOrNot = null)
    {
        $this->OpenOrNot = $OpenOrNot;
        $this->CentralizedOrNot = $CentralizedOrNot;
    }
}