<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Начало периода сдачи текущих показаний по ПУ
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_Period_Start extends GisgkhType
{
    /**
     * @var integer $StartDate Дата начала, число от 1 до 30
     */
    public $StartDate = null;

    /**
     * @var string $NextMonth Следующего месяца (true/false)
     */
    public $NextMonth = 'true';
}