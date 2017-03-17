<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject;

/**
 * Добавление
 */
class Add extends \gisgkh\types\HouseManagement\ManageObjectType
{
    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceCharterType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add\HouseService[]
     */
     public $HouseService = [];

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add\AddService[]
     */
     public $AddService = [];

    /**
     * @param \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseMService Основание
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     */
    public function __construct(\gisgkh\types\HouseManagement\BaseServiceCharterType $BaseMService = null, array $HouseService = [], array $AddService = [])
    {
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
    }
}