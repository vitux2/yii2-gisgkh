<?php

namespace gisgkh\types\HouseManagement;

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

        $this->TransportGUID = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535))
    }
}