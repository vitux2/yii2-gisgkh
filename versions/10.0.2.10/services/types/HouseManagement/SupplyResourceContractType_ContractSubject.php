<?php

namespace gisgkh\types\HouseManagement;

/**
 * Критерий поиска договора ресурсоснабжения по предмету договора
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_ContractSubject extends ContractSubjectType
{
    /**
     * @var string $TransportGUID Транспортный идентификатор
     */
    public $TransportGUID = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->TransportGUID = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
}