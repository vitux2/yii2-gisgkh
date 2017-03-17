<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт договора ресурсоснабжения
 */
class importSupplyResourceContractRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Договор ресурсоснабжения
     * 
     * @var \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract[]
     */
     public $Contract = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract[] $Contract Договор ресурсоснабжения
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Contract = [], $version = "10.0.2.1")
    {
        $this->Contract = $Contract;
        $this->version = $version;
    }
}