<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Запрос на пролонгацию договора ресурсоснабжения
 *
 * @package gisgkh\types\HouseManagement
 */
class importSupplyResourceContractRequest_RollOverContract extends GisgkhType
{
    /**
     * @var string $RollOverDate Дата окончания пролонгации
     */
    public $RollOverDate = null;
}