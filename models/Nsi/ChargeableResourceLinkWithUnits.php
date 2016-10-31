<?php

namespace opengkh\gis\models\Nsi;

use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;

/**
 * Ссылка на элемент справочника "Тарифицируемый ресурс" с указанием едениц измерения
 *
 * @package opengkh\gis\models\Nsi
 */
class ChargeableResourceLinkWithUnits extends GisNsiDirectoryEntryLink
{
    /**
     * @var ChargeableResourceUnit[] $units
     */
    public $units = [];
}