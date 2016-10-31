<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;

/**
 * Показатель качества (содержащийся в справочнике показателей качества).
 * Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется.
 * Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
 *
 * @package gisgkh\types\HouseManagement
 */
class Quality extends GisgkhType
{
    /**
     * @var string $AddressObjectKey Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ. GUID
     */
    public $AddressObjectKey = null;

    /**
     * @var string $PairKey Ссылка на пару из коммунальной услуги и ресурса из предмета договора, GUID
     */
    public $PairKey = null;

    /**
     * @var nsiRef $QualityIndicator Показатель качества. Ссылка на НСИ "Показатели качества коммунальных ресурсов" (реестровый номер 276)
     */
    public $QualityIndicator = null;

    /**
     * @var IndicatorValueType $IndicatorValue Значение показателя качества
     */
    public $IndicatorValue = null;
}