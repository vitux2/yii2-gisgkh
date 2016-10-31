<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №2 "Вид коммунтального ресурса"
 * @package opengkh\gis\models\Nsi
 */
class MunicipalResourceDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 2;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return MunicipalResource::className();
    }
}