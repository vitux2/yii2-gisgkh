<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №239 "Тарифицируемый ресурс"
 * @package startuplab\gisgkh\common\models\Nsi
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