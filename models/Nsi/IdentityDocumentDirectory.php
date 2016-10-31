<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №95 "Вид документа, удостоверяющего личность"
 * @package startuplab\gisgkh\common\models\Nsi
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