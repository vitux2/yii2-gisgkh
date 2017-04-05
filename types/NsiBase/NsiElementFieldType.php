<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля для элемента справочника. Абстрактный тип.
 */
class NsiElementFieldType
{
    /**
     * Наименование поля элемента справочника.
     * 
     * @var string
     */
     public $Name = null;

    /**
     * @param string $Name Наименование поля элемента справочника.
     */
    public function __construct(string $Name = null)
    {
        $this->Name = $Name;
    }
}