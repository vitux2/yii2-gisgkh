<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectoryEntryLink;

/**
 * Ссылка на элемент справочника "Тарифицируемый ресурс" с указанием едениц измерения
 *
 * @package startuplab\gisgkh\common\models\Nsi
 */
class ChargeableResourceLinkWithUnits extends GisNsiDirectoryEntryLink
{
    /**
     * @var ChargeableResourceUnit[] $units
     */
    public $units = [];
}