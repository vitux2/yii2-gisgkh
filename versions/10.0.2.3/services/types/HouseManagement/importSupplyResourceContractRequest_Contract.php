<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;

/**
 * Запрос на совершение действия * с договором ресурсоснабжения:
 * - создание/изменение
 * - расторжение
 * - пролонгация
 * - аннулирование
 *
 * * Должен быть заполнен только один из атрибутов, что будет указывать на тип запрашиваемой операции
 *
 * @package gisgkh\types\HouseManagement
 */
class importSupplyResourceContractRequest_Contract extends GisgkhType
{
    /**
     * @var string $TransportGUID Транспортный идентификатор
     */
    public $TransportGUID = null;

    /**
     * @var SupplyResourceContractType $SupplyResourceContract Запрос на создание/изменение договора
     */
    public $SupplyResourceContract = null;

    /**
     * @var TerminateContract $TerminateContract Запрос на расторжение договора
     */
    public $TerminateContract = null;

    /**
     * @var importSupplyResourceContractRequest_RollOverContract $RollOverContract Запрос на пролонгацию договора
     */
    public $RollOverContract = null;

    /**
     * @var AnnulmentType $AnnulmentContract Запрос на аннулирование договора
     */
    public $AnnulmentContract = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->TransportGUID = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535))
    }

}