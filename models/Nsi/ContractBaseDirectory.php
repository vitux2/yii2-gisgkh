<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №58 "Основание для заключения договора"
 * @package startuplab\gisgkh\common\models\Nsi
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