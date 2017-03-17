<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Строка" для элемента справочника.
 */
class NsiElementStringFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Значение поля элемента справочника типа "Строка".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param string [$Value] Значение поля элемента справочника типа "Строка".
     */
    public function __construct(string $Value = null)
    {
        $this->Value = $Value;
    }
}