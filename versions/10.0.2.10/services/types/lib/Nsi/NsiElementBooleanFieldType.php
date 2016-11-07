<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Да/Нет" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementBooleanFieldType extends NsiElementFieldType
{
    /**
     * @var string $Value Значение поля элемента справочника типа "Да/Нет"
     * http://www.w3schools.com/xml/schema_dtypes_misc.asp
     * Note: Legal values for boolean are true, false, 1 (which indicates true), and 0 (which indicates false).
     */
    public $Value;

    /**
     * @return boolean
     */
    public function getValue()
    {
        return filter_var($this->Value, FILTER_VALIDATE_BOOLEAN);
    }
}