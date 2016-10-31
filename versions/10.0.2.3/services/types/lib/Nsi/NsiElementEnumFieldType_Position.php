<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Запись элемента справочника типа "Перечислимый"
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementEnumFieldType_Position extends GisgkhType
{
    /**
     * @var string $GUID Код поля элемента справочника типа "Перечислимый"
     */
    public $GUID = null;

    /**
     * @var string $Value Значение поля элемента справочника типа "Перечислимый"
     */
    public $Value = null;
}