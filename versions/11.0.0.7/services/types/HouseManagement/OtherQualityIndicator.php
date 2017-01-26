<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества).
 * Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется.
 * Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
 *
 * @package gisgkh\types\HouseManagement
 */
class OtherQualityIndicator extends GisgkhType
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
     * @var string $IndicatorName Наименование показателя, до 250 символов
     */
    public $IndicatorName = null;

    /**
     * @var string $Number Установленное значение показателя качества, decimal
     */
    public $Number = null;

    /**
     * @var string $OKEI Код ОКЕИ, 3 символа
     */
    public $OKEI = null;
}