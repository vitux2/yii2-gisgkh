<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Period;

/**
 * Конец периода
 */
class End
{
    /**
     * Дата окончания. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Следующего месяца
     * 
     * @var string
     */
     public $NextMonth = null;

    /**
     * @param string $EndDate Дата окончания. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     * @param string [$NextMonth] Следующего месяца
     */
    public function __construct(string $EndDate = null, string $NextMonth = null)
    {
        $this->EndDate = $EndDate;
        $this->NextMonth = $NextMonth;
    }
}