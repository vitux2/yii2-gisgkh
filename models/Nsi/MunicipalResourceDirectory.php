<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №2 "Вид коммунтального ресурса"
 * @package startuplab\gisgkh\common\models\Nsi
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