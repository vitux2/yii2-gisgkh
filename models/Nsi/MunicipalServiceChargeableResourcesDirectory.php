<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №236 "Связь коммуальных услуг с тарифицируемыми ресурсами"
 * @package startuplab\gisgkh\common\models\Nsi
 */
class MunicipalServiceChargeableResourcesDirectory extends GisNsiDirectory
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
        return MunicipalServiceChargeableResources::className();
    }
}