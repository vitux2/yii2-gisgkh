<?php

namespace gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary;

/**
 * Информация о головной организации
 */
class ParentOrg
{
    /**
     * Версия организации в реестре организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType
     */
     public $RegOrgVersion = null;

    /**
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $RegOrgVersion Версия организации в реестре организаций
     */
    public function __construct(\gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $RegOrgVersion = null)
    {
        $this->RegOrgVersion = $RegOrgVersion;
    }
}