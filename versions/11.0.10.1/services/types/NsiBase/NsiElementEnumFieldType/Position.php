<?php

namespace gisgkh\types\NsiBase\NsiElementEnumFieldType;

/**
 * Запись элемента справочника типа "Перечислимый".
 */
class Position
{
    /**
     * Код поля элемента справочника типа "Перечислимый".
     * 
     * @var \gisgkh\types\NsiBase\NsiElementEnumFieldType\Position\GUID
     */
     public $GUID = null;

    /**
     * Значение поля элемента справочника типа "Перечислимый".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param \gisgkh\types\NsiBase\NsiElementEnumFieldType\Position\GUID $GUID Код поля элемента справочника типа "Перечислимый".
     * @param string $Value Значение поля элемента справочника типа "Перечислимый".
     */
    public function __construct(\gisgkh\types\NsiBase\NsiElementEnumFieldType\Position\GUID $GUID = null, string $Value = null)
    {
        $this->GUID = $GUID;
        $this->Value = $Value;
    }
}