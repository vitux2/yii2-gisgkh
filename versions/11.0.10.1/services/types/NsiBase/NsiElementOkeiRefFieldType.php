<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент справочника ОКЕИ" для элемента справочника.
 */
class NsiElementOkeiRefFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Код единицы измерения по справочнику ОКЕИ.
     * 
     * @var string
     */
     public $Code = null;

    /**
     * @param string [$Code] Код единицы измерения по справочнику ОКЕИ.
     */
    public function __construct(string $Code = null)
    {
        $this->Code = $Code;
    }
}