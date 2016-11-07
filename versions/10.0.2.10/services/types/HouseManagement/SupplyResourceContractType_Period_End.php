<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Окончание периода сдачи текущих показаний по ПУ
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_Period_End extends GisgkhType
{
    /**
     * @var integer $EndDate Дата окончания. Число от -1 до 30. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     */
    public $EndDate = null;

    /**
     * @var string $NextMonth Следующего месяца (true/false)
     */
    public $NextMonth = 'true';
}