<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №54 "Причина растрожения договора"
 */
class ContractTerminationReasonDirectory extends GisNsiDirectory
{
    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 54;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return ContractTerminationReason::className();
    }
}