<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование, дата и время последнего изменения справочника.
 */
class NsiItemInfoType
{
    /**
     * Реестровый номер справочника.
     * 
     * @var string
     */
     public $RegistryNumber = null;

    /**
     * Наименование справочника.
     * 
     * @var string
     */
     public $Name = null;

    /**
     * Дата и время последнего изменения справочника.
     * 
     * @var string
     */
     public $Modified = null;

    /**
     * @param string $RegistryNumber Реестровый номер справочника.
     * @param string $Name Наименование справочника.
     * @param string $Modified Дата и время последнего изменения справочника.
     */
    public function __construct(string $RegistryNumber = null, string $Name = null, string $Modified = null)
    {
        $this->RegistryNumber = $RegistryNumber;
        $this->Name = $Name;
        $this->Modified = $Modified;
    }
}