<?php

namespace gisgkh\types\HouseManagement\ContractType;

/**
 * Срок действия (заполняется при экспорте)
 */
class Validity
{
    /**
     * Месяц
     * 
     * @var string
     */
     public $Month = null;

    /**
     * год/лет
     * 
     * @var string
     */
     public $Year = null;

    /**
     * @param string [$Month] Месяц
     * @param string [$Year] год/лет
     */
    public function __construct(string $Month = null, string $Year = null)
    {
        $this->Month = $Month;
        $this->Year = $Year;
    }
}