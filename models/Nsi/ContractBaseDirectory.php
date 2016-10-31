<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №58 "Основание для заключения договора"
 * @package opengkh\gis\models\Nsi
 */
class ContractBaseDirectory extends GisNsiDirectory
{
    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 58;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return ContractBase::className();
    }
}