<?php

namespace gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion;

/**
 * Обособленное подразделение
 */
class Subsidiary extends \gisgkh\types\OrganizationsRegistryBase\SubsidiaryType
{
    /**
     * Статус версии 
     * 
     * @var string
     */
     public $StatusVersion = null;

    /**
     * Информация о головной организации
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary\ParentOrg
     */
     public $ParentOrg = null;

    /**
     * @param string $StatusVersion Статус версии 
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary\ParentOrg $ParentOrg Информация о головной организации
     */
    public function __construct(string $StatusVersion = null, \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary\ParentOrg $ParentOrg = null)
    {
        $this->StatusVersion = $StatusVersion;
        $this->ParentOrg = $ParentOrg;
    }
}