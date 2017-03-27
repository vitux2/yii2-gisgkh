<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType;

/**
 * Предмет договора
 */
class ContractSubject extends \gisgkh\types\HouseManagement\ContractSubjectType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     */
    public function __construct($TransportGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
    }
}