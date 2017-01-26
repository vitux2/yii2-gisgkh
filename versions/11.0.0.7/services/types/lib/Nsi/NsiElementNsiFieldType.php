<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на справочник" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementNsiFieldType extends NsiElementFieldType
{
    /**
     * @var NsiElementNsiFieldType_NsiRef $NsiRef Ссылка на справочник
     */
    public $NsiRef = null;
}