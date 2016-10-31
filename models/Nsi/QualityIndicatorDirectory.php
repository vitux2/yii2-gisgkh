<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №276 "Показатели качества коммунальных ресурсов"
 * @package startuplab\gisgkh\common\models\Nsi
 */
class QualityIndicatorDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 276;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return QualityIndicator::className();
    }
}