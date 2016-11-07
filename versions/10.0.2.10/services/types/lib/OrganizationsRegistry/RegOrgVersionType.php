<?php

namespace gisgkh\types\lib\OrganizationsRegistry;

use gisgkh\types\GisgkhType;

/**
 * Версия организации в реестре организаций
 *
 * @package gisgkh\types\lib\OrganizationsRegistry
 */
class RegOrgVersionType extends GisgkhType
{
    /**
     * @var string $orgVersionGUID Идентификатор версии записи в реестре организаций
     */
    public $orgVersionGUID = null;
}