<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use startuplab\helpers\GuidHelper;

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
        $this->TransportGUID = GuidHelper::generate();
    }

}