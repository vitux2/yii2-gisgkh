<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject;

/**
 * Аннулирование
 */
class Annulment
{
    /**
     * Идентификатор версии объекта управления  в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractObjectVersionGUID = null;

    /**
     * @param string $ContractObjectVersionGUID Идентификатор версии объекта управления  в ГИС ЖКХ 
     */
    public function __construct(string $ContractObjectVersionGUID = null)
    {
        $this->ContractObjectVersionGUID = $ContractObjectVersionGUID;
    }
}