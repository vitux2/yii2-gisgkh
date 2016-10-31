<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Вещественное" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementFloatFieldType extends NsiElementFieldType
{
    /**
     * @var string $Value Значение поля элемента справочника типа "Вещественное"
     * https://www.safaribooksonline.com/library/view/XML+Schema/0596002521/re67.html
     * Valid values include: "123.456", "+1234.456", "-1.2344e56", "-.45E-6", "INF", "-INF", or "NaN".
     */
    public $Value;
}