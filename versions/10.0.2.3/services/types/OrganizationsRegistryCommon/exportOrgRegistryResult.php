<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

use gisgkh\types\lib\BaseType;
use gisgkh\types\lib\ErrorMessageType;

/**
 * Class exportOrgRegistryResult
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryResult extends BaseType
{
    /**
     * @var exportOrgRegistryResultType[] $OrgData Найденная организация
     */
    public $OrgData = [];

    /**
     * @var ErrorMessageType $ErrorMessage
     */
    public $ErrorMessage = null;

    public $version = "10.0.2.1";
}