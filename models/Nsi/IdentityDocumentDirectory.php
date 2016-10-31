<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №95 "Вид документа, удостоверяющего личность"
 * @package opengkh\gis\models\Nsi
 */
class IdentityDocumentDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 95;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return IdentityDocument::className();
    }
}