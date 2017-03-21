<?php

namespace gisgkh\types\NsiBase\NsiElementNsiRefFieldType;

/**
 * Ссылка на элемент внутреннего справочника.
 */
class NsiRef
{
    /**
     * Реестровый номер справочника.
     * 
     * @var string
     */
     public $NsiItemRegistryNumber = null;

    /**
     * Ссылка на элемент справочника.
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $Ref = null;

    /**
     * @param string $NsiItemRegistryNumber Реестровый номер справочника.
     * @param \gisgkh\types\NsiBase\nsiRef $Ref Ссылка на элемент справочника.
     */
    public function __construct(string $NsiItemRegistryNumber = null, \gisgkh\types\NsiBase\nsiRef $Ref = null)
    {
        $this->NsiItemRegistryNumber = $NsiItemRegistryNumber;
        $this->Ref = $Ref;
    }
}