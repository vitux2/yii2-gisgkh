<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject;

/**
 * Изменение
 */
class Edit extends \gisgkh\types\HouseManagement\ManageObjectType
{
    /**
     * Идентификатор версии объекта управления  в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractObjectVersionGUID = null;

    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceCharterType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit\HouseService[]
     */
     public $HouseService = [];

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit\AddService[]
     */
     public $AddService = [];

    /**
     * @param string $ContractObjectVersionGUID Идентификатор версии объекта управления  в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\BaseServiceCharterType [$BaseMService] Основание
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Edit\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     */
    public function __construct(string $ContractObjectVersionGUID = null, \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseMService = null, array $HouseService = [], array $AddService = [])
    {
        $this->ContractObjectVersionGUID = $ContractObjectVersionGUID;
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
    }
}