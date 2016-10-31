<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Целое число" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementIntegerFieldType extends NsiElementFieldType
{
    /**
     * @var string $Value Значение поля элемента справочника типа "Целое число"
     */
    public $Value;

    /**
     * @return integer
     */
    public function getValue()
    {
        return intval($this->Value);
    }
}