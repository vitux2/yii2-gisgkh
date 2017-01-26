<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;

/**
 * Class exportOrgRegistryResultType
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryResultType extends GisgkhType
{
    /**
     * @var string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций. GUID
     */
    public $orgRootEntityGUID = null;

    /**
     * @var exportOrgRegistryResultType_OrgVersion $OrgVersion Версия организации в реестре организаций
     */
    public $OrgVersion = null;

    /**
     * @var string $orgPPAGUID Идентификатор зарегистрированной организации
     */
    public $orgPPAGUID = null;

    /**
     * @var nsiRef[] $organizationRoles Полномочие организации (НСИ №20)
     */
    public $organizationRoles = [];

    /**
     * @var string $isRegistered Зарегистрирована в ГИС ЖКХ (true|false)
     */
    public $isRegistered = null;
}