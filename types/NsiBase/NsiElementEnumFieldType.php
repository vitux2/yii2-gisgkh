<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Перечислимый" для элемента справочника.
 */
class NsiElementEnumFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Запись элемента справочника типа "Перечислимый".
     * 
     * @var \gisgkh\types\NsiBase\NsiElementEnumFieldType\Position[]
     */
     public $Position = null;

    /**
     * @param \gisgkh\types\NsiBase\NsiElementEnumFieldType\Position[] [$Position] Запись элемента справочника типа "Перечислимый".
     */
    public function __construct(array $Position = null)
    {
        $this->Position = $Position;
    }
}