<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Составной тип. Наименование и значение поля для элемента справочника. Абстрактный тип
 *
 * @package gisgkh\types\lib\Nsi
 */
abstract class NsiElementFieldType extends GisgkhType
{
    /**
     * @var string $Name Наименование поля элемента справочника
     */
    public $Name = null;

}