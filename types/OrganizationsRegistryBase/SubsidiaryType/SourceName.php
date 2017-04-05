<?php

namespace gisgkh\types\OrganizationsRegistryBase\SubsidiaryType;

/**
 * Источник информации
 */
class SourceName
{
    /**
     * от
     * 
     * @var string
     */
    public $Date = null;

    /**
     * @param string $Date от
     */
    public function __construct($Date = null)
    {
        $this->Date = $Date;
    }
}