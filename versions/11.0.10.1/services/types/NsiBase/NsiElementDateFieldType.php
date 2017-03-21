<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Дата" для элемента справочника.
 */
class NsiElementDateFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Значение поля элемента справочника типа "Дата".
     * 
     * @var string
     */
     public $Value = null;

    /**
     * @param string [$Value] Значение поля элемента справочника типа "Дата".
     */
    public function __construct(string $Value = null)
    {
        $this->Value = $Value;
    }
}