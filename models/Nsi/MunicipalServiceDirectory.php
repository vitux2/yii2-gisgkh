<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №3 "Вид коммунтальной услуги"
 * @package opengkh\gis\models\Nsi
 */
class MunicipalServiceDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 3;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return MunicipalService::className();
    }
}