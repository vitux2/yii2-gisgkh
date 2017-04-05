<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент справочника ФИАС" для элемента справочника.
 */
class NsiElementFiasAddressRefFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Ссылка на элемент справочника ФИАС.
     * 
     * @var \gisgkh\types\NsiBase\NsiElementFiasAddressRefFieldType\NsiRef
     */
     public $NsiRef = null;

    /**
     * @param \gisgkh\types\NsiBase\NsiElementFiasAddressRefFieldType\NsiRef [$NsiRef] Ссылка на элемент справочника ФИАС.
     */
    public function __construct(\gisgkh\types\NsiBase\NsiElementFiasAddressRefFieldType\NsiRef $NsiRef = null)
    {
        $this->NsiRef = $NsiRef;
    }
}