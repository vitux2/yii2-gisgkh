<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Данные об объекте жилищного фонда. При импорте договора должен быть добавлен как минимум один адрес объекта жилищного фонда
 */
class ObjectAddress extends \gisgkh\types\HouseManagement\ObjectAddressType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Пара: коммунальная услуга и коммунальный ресурс
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ObjectAddress\Pair[]
     */
     public $Pair = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ObjectAddress\Pair[] $Pair Пара: коммунальная услуга и коммунальный ресурс
     */
    public function __construct(string $TransportGUID = null, array $Pair = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->Pair = $Pair;
    }
}