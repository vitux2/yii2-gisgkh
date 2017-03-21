<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons;

/**
 * Решение ОМС о выбранном способе формирования фонда капитального ремонта
 */
class OverhaulFormingKindOMSDescision
{
    /**
     * Идентификатор решения ОМС о выбранном способе формирования фонда капитального ремонта
     * 
     * @var string
     */
     public $OverhaulFormingKindOMSDescisionGUID = null;

    /**
     * @param string $OverhaulFormingKindOMSDescisionGUID Идентификатор решения ОМС о выбранном способе формирования фонда капитального ремонта
     */
    public function __construct(string $OverhaulFormingKindOMSDescisionGUID = null)
    {
        $this->OverhaulFormingKindOMSDescisionGUID = $OverhaulFormingKindOMSDescisionGUID;
    }
}