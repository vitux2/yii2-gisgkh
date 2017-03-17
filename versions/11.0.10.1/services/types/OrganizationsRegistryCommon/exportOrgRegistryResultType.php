<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * 
 */
class exportOrgRegistryResultType
{
    /**
     * Идентификатор корневой сущности организации в реестре организаций
     * 
     * @var string
     */
     public $orgRootEntityGUID = null;

    /**
     * Версия организации в реестре организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion
     */
     public $OrgVersion = null;

    /**
     * Идентификатор зарегистрированной организации
     * 
     * @var string
     */
     public $orgPPAGUID = null;

    /**
     * Полномочие организации (НСИ №20)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef[]
     */
     public $organizationRoles = [];

    /**
     * Зарегистрирована в ГИС ЖКХ
     * 
     * @var string
     */
     public $isRegistered = null;

    /**
     * @param string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion $OrgVersion Версия организации в реестре организаций
     * @param string [$orgPPAGUID] Идентификатор зарегистрированной организации
     * @param \gisgkh\types\NsiBase\nsiRef[] [$organizationRoles] Полномочие организации (НСИ №20)
     * @param string [$isRegistered] Зарегистрирована в ГИС ЖКХ
     */
    public function __construct(string $orgRootEntityGUID = null, \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion $OrgVersion = null, string $orgPPAGUID = null, array $organizationRoles = [], string $isRegistered = null)
    {
        $this->orgRootEntityGUID = $orgRootEntityGUID;
        $this->OrgVersion = $OrgVersion;
        $this->orgPPAGUID = $orgPPAGUID;
        $this->organizationRoles = $organizationRoles;
        $this->isRegistered = $isRegistered;
    }
}