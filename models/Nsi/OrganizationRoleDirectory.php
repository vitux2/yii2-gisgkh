<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №20 "Полномочия организации"
 * @package startuplab\gisgkh\common\models\Nsi
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