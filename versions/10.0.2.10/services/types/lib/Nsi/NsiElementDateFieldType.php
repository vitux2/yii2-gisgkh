<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Дата" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementDateFieldType extends NsiElementFieldType
{
    /**
     * @var string $Value Значение поля элемента справочника типа "Дата"
     * http://www.w3schools.com/xml/schema_dtypes_date.asp
     * The date is specified in the following form "YYYY-MM-DD"
     */
    public $Value;
}