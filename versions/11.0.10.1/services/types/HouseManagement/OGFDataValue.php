<?php

namespace gisgkh\types\HouseManagement;

/**
 * Значение строки данных для объекта ЖФ
 */
class OGFDataValue
{
    /**
     * Строка
     * 
     * @var string
     */
     public $StringValue = null;

    /**
     * Вещественное 
     * 
     * @var string
     */
     public $FloatValue = null;

    /**
     * Дата
     * 
     * @var string
     */
     public $DateTimeValue = null;

    /**
     * Целое
     * 
     * @var string
     */
     public $IntegerValue = null;

    /**
     * Логическое
     * 
     * @var string
     */
     public $BooleanValue = null;

    /**
     * Перечислимое (ссылка на код записи справочника)
     * 
     * @var string
     */
     public $NsiCode = null;

    /**
     * Файл (ссылка на файл)
     * 
     * @var string
     */
     public $File = null;

    /**
     * @param string $StringValue Строка
     * @param string $FloatValue Вещественное 
     * @param string $DateTimeValue Дата
     * @param string $IntegerValue Целое
     * @param string $BooleanValue Логическое
     * @param string $NsiCode Перечислимое (ссылка на код записи справочника)
     * @param string $File Файл (ссылка на файл)
     */
    public function __construct(string $StringValue = null, string $FloatValue = null, string $DateTimeValue = null, string $IntegerValue = null, string $BooleanValue = null, string $NsiCode = null, string $File = null)
    {
        $this->StringValue = $StringValue;
        $this->FloatValue = $FloatValue;
        $this->DateTimeValue = $DateTimeValue;
        $this->IntegerValue = $IntegerValue;
        $this->BooleanValue = $BooleanValue;
        $this->NsiCode = $NsiCode;
        $this->File = $File;
    }
}