<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент справочника ОКЕИ" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementOkeiRefFieldType extends NsiElementFieldType
{
    /**
     * @var string $Code Код единицы измерения по справочнику ОКЕИ
     */
    public $Code = null;
}