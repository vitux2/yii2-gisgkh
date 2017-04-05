<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject;

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
     * @var \gisgkh\types\HouseManagement\BaseServiceType
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
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseExclusion Основание
     * @param string $DateExclusion Дата исключения
     */
    public function __construct(string $ContractObjectVersionGUID = null, \gisgkh\types\HouseManagement\BaseServiceType $BaseExclusion = null, string $DateExclusion = null)
    {
        $this->ContractObjectVersionGUID = $ContractObjectVersionGUID;
        $this->BaseExclusion = $BaseExclusion;
        $this->DateExclusion = $DateExclusion;
    }
}