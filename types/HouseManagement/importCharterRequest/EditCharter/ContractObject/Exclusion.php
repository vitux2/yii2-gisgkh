<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject;

/**
 * Исключение
 */
class Exclusion
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
     public $BaseExclusion = null;

    /**
     * Дата исключения
     * 
     * @var string
     */
     public $DateExclusion = null;

    /**
     * @param string $ContractObjectVersionGUID Идентификатор версии объекта управления  в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseExclusion Основание
     * @param string $DateExclusion Дата исключения
     */
    public function __construct(string $ContractObjectVersionGUID = null, \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseExclusion = null, string $DateExclusion = null)
    {
        $this->ContractObjectVersionGUID = $ContractObjectVersionGUID;
        $this->BaseExclusion = $BaseExclusion;
        $this->DateExclusion = $DateExclusion;
    }
}