<?php

namespace gisgkh\types\NsiBase\NsiElementNsiFieldType;

/**
 * Ссылка на справочник.
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
     * Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * 
     * @var string
     */
     public $ListGroup = null;

    /**
     * @param string $NsiItemRegistryNumber Реестровый номер справочника.
     * @param string $ListGroup Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     */
    public function __construct(string $NsiItemRegistryNumber = null, string $ListGroup = null)
    {
        $this->NsiItemRegistryNumber = $NsiItemRegistryNumber;
        $this->ListGroup = $ListGroup;
    }
}