<?php

namespace gisgkh\types\HouseManagement;

/**
 * Выбор значения показателя качества
 */
class IndicatorValueType
{
    /**
     * Число
     * 
     * @var string
     */
     public $Number = null;

    /**
     * Начало диапазона
     * 
     * @var string
     */
     public $StartRange = null;

    /**
     * Конец диапазона
     * 
     * @var string
     */
     public $EndRange = null;

    /**
     * Код ОКЕИ
     * 
     * @var string
     */
     public $OKEI = null;

    /**
     * Значение соответствует
     * 
     * @var string
     */
     public $Correspond = null;

    /**
     * @param string $Number Число
     * @param string $StartRange Начало диапазона
     * @param string $EndRange Конец диапазона
     * @param string $OKEI Код ОКЕИ
     * @param string $Correspond Значение соответствует
     */
    public function __construct(string $Number = null, string $StartRange = null, string $EndRange = null, string $OKEI = null, string $Correspond = null)
    {
        $this->Number = $Number;
        $this->StartRange = $StartRange;
        $this->EndRange = $EndRange;
        $this->OKEI = $OKEI;
        $this->Correspond = $Correspond;
    }
}