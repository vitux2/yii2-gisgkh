<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Выбор значения показателя качества
 *
 * @package gisgkh\types\HouseManagement
 */
class IndicatorValueType extends GisgkhType
{
    /**
     * @var string $Number Установленное значение показателя качества, decimal
     */
    public $Number = null;

    /**
     * @var string $StartRange Начало диапазона, decimal
     */
    public $StartRange = null;

    /**
     * @var string $EndRange Конец диапазона, decimal
     */
    public $EndRange = null;

    /**
     * @var string $OKEI Код ОКЕИ, 3 символа
     */
    public $OKEI = null;

    /**
     * @var string Значение соответствует
     */
    public $Correspond = null;
}