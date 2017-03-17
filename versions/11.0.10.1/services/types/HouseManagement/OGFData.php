<?php

namespace gisgkh\types\HouseManagement;

/**
 * Строка данных для объекта ЖФ
 */
class OGFData
{
    /**
     * Код строки в справочнике Форма описания объектов ЖФ
     * 
     * @var string
     */
     public $Code = null;

    /**
     * Значение показателя
     * 
     * @var \gisgkh\types\HouseManagement\OGFDataValue
     */
     public $Value = null;

    /**
     * @param string $Code Код строки в справочнике Форма описания объектов ЖФ
     * @param \gisgkh\types\HouseManagement\OGFDataValue $Value Значение показателя
     */
    public function __construct(string $Code = null, \gisgkh\types\HouseManagement\OGFDataValue $Value = null)
    {
        $this->Code = $Code;
        $this->Value = $Value;
    }
}