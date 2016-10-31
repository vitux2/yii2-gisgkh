<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №276 "Показатели качества коммунальных ресурсов"
 * @package opengkh\gis\models\Nsi
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