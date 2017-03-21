<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Целое число" для элемента справочника.
 */
class NsiElementIntegerFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Значение поля элемента справочника типа "Целое число".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param string [$Value] Значение поля элемента справочника типа "Целое число".
     */
    public function __construct(string $Value = null)
    {
        $this->Value = $Value;
    }
}