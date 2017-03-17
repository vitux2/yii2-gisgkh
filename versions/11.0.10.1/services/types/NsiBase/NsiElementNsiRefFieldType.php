<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент внутреннего справочника" для элемента справочника.
 */
class NsiElementNsiRefFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Ссылка на элемент внутреннего справочника.
     * 
     * @var \gisgkh\types\NsiBase\NsiElementNsiRefFieldType\NsiRef
     */
     public $NsiRef = null;

    /**
     * @param \gisgkh\types\NsiBase\NsiElementNsiRefFieldType\NsiRef [$NsiRef] Ссылка на элемент внутреннего справочника.
     */
    public function __construct(\gisgkh\types\NsiBase\NsiElementNsiRefFieldType\NsiRef $NsiRef = null)
    {
        $this->NsiRef = $NsiRef;
    }
}