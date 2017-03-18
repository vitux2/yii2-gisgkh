<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter;

/**
 * Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
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
     * @var \gisgkh\types\HouseManagement\BaseServiceCharterType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject\HouseService[]
     */
     public $HouseService = null;

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject\AddService[]
     */
     public $AddService = null;

    /**
     * Управление многоквартирным домом осуществляется управляющей организацией по договору управления
     * 
     * @var string
     */
     public $IsManagedByContract = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseMService Основание
     * @param \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * @param string [$IsManagedByContract] Управление многоквартирным домом осуществляется управляющей организацией по договору управления
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseMService = null, array $HouseService = null, array $AddService = null, string $IsManagedByContract = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
        $this->IsManagedByContract = $IsManagedByContract;
    }
}