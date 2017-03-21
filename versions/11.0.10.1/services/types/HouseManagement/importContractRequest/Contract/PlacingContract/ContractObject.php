<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract;

/**
 * Объект управления
 */
class ContractObject extends \gisgkh\types\HouseManagement\ManageObjectType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject\HouseService[]
     */
     public $HouseService = null;

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject\AddService[]
     */
     public $AddService = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseMService Основание
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\BaseServiceType $BaseMService = null, array $HouseService = null, array $AddService = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
    }
}