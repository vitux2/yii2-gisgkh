<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

use gisgkh\types\lib\OrganizationsRegistry\RegOrgVersionType;
use gisgkh\types\lib\OrganizationsRegistry\SubsidiaryType;

/**
 * Информация об обособленном подразделении
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryResultType_OrgVersion_Subsidiary extends SubsidiaryType
{
    /**
     * @var string $StatusVersion статус версии
     */
    public $StatusVersion = null;

    /**
     * @var RegOrgVersionType $ParentOrg Информация о головной организации (ссылка на версию)
     */
    public $ParentOrg = null;
}