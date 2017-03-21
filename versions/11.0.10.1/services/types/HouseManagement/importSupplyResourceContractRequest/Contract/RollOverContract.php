<?php

namespace gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract;

/**
 * Пролонгация
 */
class RollOverContract
{
    /**
     * Дата окончания пролонгации
     * 
     * @var string
     */
     public $RollOverDate = null;

    /**
     * @param string $RollOverDate Дата окончания пролонгации
     */
    public function __construct(string $RollOverDate = null)
    {
        $this->RollOverDate = $RollOverDate;
    }
}