<?php

namespace gisgkh\types\lib\OrganizationsRegistry;
use gisgkh\types\GisgkhType;

/**
 * Организация в реестре организаций
 *
 * @package gisgkh\types\lib\OrganizationsRegistry
 */
class RegOrgType extends GisgkhType
{
    /**
     * @var string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций, GUID
     */
    public $orgRootEntityGUID = null;

    /**
     * @param string $orgRootEntityGUID
     */
    public function __construct($orgRootEntityGUID)
    {
        $this->orgRootEntityGUID = $orgRootEntityGUID;
    }
}