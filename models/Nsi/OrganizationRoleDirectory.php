<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №20 "Полномочия организации"
 * @package opengkh\gis\models\Nsi
 */
class OrganizationRoleDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 20;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return OrganizationRole::className();
    }
}