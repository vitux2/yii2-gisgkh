<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject;

/**
 * Добавление 
 */
class Add extends \gisgkh\types\HouseManagement\ManageObjectType
{
    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add\HouseService[]
     */
     public $HouseService = null;

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add\AddService[]
     */
     public $AddService = null;

    /**
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseMService Основание
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject\Add\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     */
    public function __construct(\gisgkh\types\HouseManagement\BaseServiceType $BaseMService = null, array $HouseService = null, array $AddService = null)
    {
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
    }
}