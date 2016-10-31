<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Перечислимый" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementEnumFieldType extends NsiElementFieldType
{
    /**
     * @var NsiElementEnumFieldType_Position[] $Position Запись элемента справочника типа "Перечислимый"
     */
    public $Position = [];
}