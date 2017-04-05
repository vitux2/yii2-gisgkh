<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * 
 */
class RegOrgType
{
    /**
     * Идентификатор корневой сущности организации в реестре организаций
     * 
     * @var string
     */
     public $orgRootEntityGUID = null;

    /**
     * @param string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций
     */
    public function __construct(string $orgRootEntityGUID = null)
    {
        $this->orgRootEntityGUID = $orgRootEntityGUID;
    }
}