<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * 
 */
class RegOrgVersionType
{
    /**
     * Идентификатор версии записи в реестре организаций
     * 
     * @var string
     */
     public $orgVersionGUID = null;

    /**
     * @param string $orgVersionGUID Идентификатор версии записи в реестре организаций
     */
    public function __construct(string $orgVersionGUID = null)
    {
        $this->orgVersionGUID = $orgVersionGUID;
    }
}