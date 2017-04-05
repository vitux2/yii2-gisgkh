<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Да/Нет" для элемента справочника.
 */
class NsiElementBooleanFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Значение поля элемента справочника типа "Да/Нет".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param string [$Value] Значение поля элемента справочника типа "Да/Нет".
     */
    public function __construct(string $Value = null)
    {
        $this->Value = $Value;
    }
}