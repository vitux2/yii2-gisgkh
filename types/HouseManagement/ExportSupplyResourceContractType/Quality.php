<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Показатель качества (содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
 */
class Quality
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
     * Показатель качества. Ссылка на НСИ "Показатели качества коммунальных ресурсов" (реестровый номер 276) 
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $QualityIndicator = null;

    /**
     * Значение показателя качества
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Quality\IndicatorValue
     */
     public $IndicatorValue = null;

    /**
     * @param string [$AddressObjectKey] Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ
     * @param string $PairKey Ссылка на пару из коммунальной услуги и ресурса из предмета договора
     * @param \gisgkh\types\NsiBase\nsiRef $QualityIndicator Показатель качества. Ссылка на НСИ "Показатели качества коммунальных ресурсов" (реестровый номер 276) 
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Quality\IndicatorValue [$IndicatorValue] Значение показателя качества
     */
    public function __construct(string $AddressObjectKey = null, string $PairKey = null, \gisgkh\types\NsiBase\nsiRef $QualityIndicator = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Quality\IndicatorValue $IndicatorValue = null)
    {
        $this->AddressObjectKey = $AddressObjectKey;
        $this->PairKey = $PairKey;
        $this->QualityIndicator = $QualityIndicator;
        $this->IndicatorValue = $IndicatorValue;
    }
}