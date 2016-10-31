<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Ссылка на элемент внутреннего справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementNsiRefFieldType_NsiRef extends GisgkhType
{
    /**
     * @var integer $NsiItemRegistryNumber Реестровый номер справочника
     */
    public $NsiItemRegistryNumber = null;

    /**
     * @var nsiRef $Ref Ссылка на элемент справочника
     */
    public $Ref = null;
}