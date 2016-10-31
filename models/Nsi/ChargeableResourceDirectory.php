<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №239 "Тарифицируемый ресурс"
 * @package opengkh\gis\models\Nsi
 */
class ChargeableResourceDirectory extends GisNsiDirectory
{
    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 239;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return ChargeableResource::className();
    }
}