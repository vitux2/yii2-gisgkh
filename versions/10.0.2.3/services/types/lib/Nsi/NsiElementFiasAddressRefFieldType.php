<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент справочника ФИАС" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementFiasAddressRefFieldType extends NsiElementFieldType
{
    /**
     * @var NsiElementFiasAddressRefFieldType_NsiRef $NsiRef Ссылка на элемент справочника ФИАС
     */
    public $NsiRef = null;
}