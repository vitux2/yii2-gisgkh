<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип выбора дня начала/окончания периода ввода показаний по ПУ
 */
class DaySelectionType
{
    /**
     * День месяца
     * 
     * @var string
     */
     public $Date = null;

    /**
     * Последний день месяца
     * 
     * @var string
     */
     public $LastDay = null;

    /**
     * Следующего месяца?
     * 
     * @var string
     */
     public $IsNextMonth = null;

    /**
     * @param string $Date День месяца
     * @param string $LastDay Последний день месяца
     * @param string $IsNextMonth Следующего месяца?
     */
    public function __construct(string $Date = null, string $LastDay = null, string $IsNextMonth = null)
    {
        $this->Date = $Date;
        $this->LastDay = $LastDay;
        $this->IsNextMonth = $IsNextMonth;
    }
}