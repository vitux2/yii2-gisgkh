<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Информация о температурном графике.
 * Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется
 * и элемент может заполняться только если предмете договора хотя бы раз встречается ресурс "Тепловая энергия".
 * Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если
 * в рамках ОЖФ встречается ресурс "Тепловая энергия".
 *
 * @package gisgkh\types\HouseManagement
 */
class TemperatureChart extends GisgkhType
{
    /**
     * @var string $AddressObjectKey Ссылка на ОЖФ, обязательно заполняется, если показатели качества ведутся в разрезе ОЖФ, GUID
     */
    public $AddressObjectKey = null;

    /**
     * @var string $OutsideTemperature Температура наружного воздуха, xs:int
     */
    public $OutsideTemperature = null;

    /**
     * @var string $FlowLineTemperature Температура теплоносителя в подающем трубопроводе, xs:positiveInteger
     */
    public $FlowLineTemperature = null;

    /**
     * @var string $OppositeLineTemperature Температура теплоносителя в обратном трубопроводе, xs:positiveInteger
     */
    public $OppositeLineTemperature = null;
}