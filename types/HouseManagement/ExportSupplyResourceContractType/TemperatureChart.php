<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Информация о температурном графике. Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия". Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
 */
class TemperatureChart
{
    /**
     * Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ
     * 
     * @var string
     */
     public $AddressObjectKey = null;

    /**
     * Температура наружного воздуха
     * 
     * @var string
     */
     public $OutsideTemperature = null;

    /**
     * Температура теплоносителя в подающем трубопроводе
     * 
     * @var string
     */
     public $FlowLineTemperature = null;

    /**
     * Температура теплоносителя в обратном трубопроводе
     * 
     * @var string
     */
     public $OppositeLineTemperature = null;

    /**
     * @param string [$AddressObjectKey] Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ
     * @param string $OutsideTemperature Температура наружного воздуха
     * @param string $FlowLineTemperature Температура теплоносителя в подающем трубопроводе
     * @param string $OppositeLineTemperature Температура теплоносителя в обратном трубопроводе
     */
    public function __construct(string $AddressObjectKey = null, string $OutsideTemperature = null, string $FlowLineTemperature = null, string $OppositeLineTemperature = null)
    {
        $this->AddressObjectKey = $AddressObjectKey;
        $this->OutsideTemperature = $OutsideTemperature;
        $this->FlowLineTemperature = $FlowLineTemperature;
        $this->OppositeLineTemperature = $OppositeLineTemperature;
    }
}