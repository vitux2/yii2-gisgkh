<?php

namespace gisgkh\types\HouseManagement;


use startuplab\helpers\GuidHelper;

class SupplyResourceContractType_ObjectAddress extends ObjectAddressType
{
    /**
     * @var string $TransportGUID Транспортный идентификатор, GUID
     */
    public $TransportGUID = null;

    /**
     * @var SupplyResourceContractType_ObjectAddress_Pair[] $Pair Пара: коммунальная услуга и коммунальный ресурс. Максимум - 100
     */
    public $Pair = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->TransportGUID = GuidHelper::generate();
    }
}