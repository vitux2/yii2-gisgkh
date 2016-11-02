<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №236 "Связь коммуальных услуг с тарифицируемыми ресурсами"
 * @package opengkh\gis\models\Nsi
 */
class GisNsiMunicipalServiceChargeableResourcesDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 236;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return GisNsiMunicipalServiceChargeableResources::className();
    }
}