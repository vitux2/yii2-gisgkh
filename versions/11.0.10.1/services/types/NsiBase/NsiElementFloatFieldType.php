<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Вещественное" для элемента справочника.
 */
class NsiElementFloatFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Значение поля элемента справочника типа "Вещественное".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param string [$Value] Значение поля элемента справочника типа "Вещественное".
     */
    public function __construct(string $Value = null)
    {
        $this->Value = $Value;
    }
}