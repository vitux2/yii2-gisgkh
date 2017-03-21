<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType;

/**
 * Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
 */
class OtherQualityIndicator
{
    /**
     * Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ
     * 
     * @var string
     */
     public $AddressObjectKey = null;

    /**
     * Ссылка на пару из коммунальной услуги и ресурса из предмета договора
     * 
     * @var string
     */
     public $PairKey = null;

    /**
     * Наименование показателя
     * 
     * @var string
     */
     public $IndicatorName = null;

    /**
     * Установленное значение показателя качества
     * 
     * @var string
     */
     public $Number = null;

    /**
     * Код ОКЕИ
     * 
     * @var string
     */
     public $OKEI = null;

    /**
     * @param string [$AddressObjectKey] Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ
     * @param string $PairKey Ссылка на пару из коммунальной услуги и ресурса из предмета договора
     * @param string $IndicatorName Наименование показателя
     * @param string $Number Установленное значение показателя качества
     * @param string $OKEI Код ОКЕИ
     */
    public function __construct(string $AddressObjectKey = null, string $PairKey = null, string $IndicatorName = null, string $Number = null, string $OKEI = null)
    {
        $this->AddressObjectKey = $AddressObjectKey;
        $this->PairKey = $PairKey;
        $this->IndicatorName = $IndicatorName;
        $this->Number = $Number;
        $this->OKEI = $OKEI;
    }
}