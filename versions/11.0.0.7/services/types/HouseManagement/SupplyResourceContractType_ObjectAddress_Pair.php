<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Пара: коммунальная услуга и коммунальный ресурс
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_ObjectAddress_Pair extends GisgkhType
{
    /**
     * @var string $PairKey Ссылка на пару из коммунальной услуги и ресурса из предмета договора, GUID
     */
    public $PairKey = null;

    /**
     * @var string $StartSupplyDate Дата начала поставки ресурса
     */
    public $StartSupplyDate = null;

    /**
     * @var string $EndSupplyDate Дата окончания поставки ресурса
     */
    public $EndSupplyDate = null;

    /**
     * @var HeatingSystemType $HeatingSystemType Тип системы теплоснабжения (заполняется для коммунальных ресурсов "Тепловая энергия" и "Горячая вода")
     */
    public $HeatingSystemType = null;
}