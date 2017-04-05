<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject;

/**
 * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
 */
class AddService extends \gisgkh\types\HouseManagement\ContractServiceType
{
    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceType
     */
     public $BaseService = null;

    /**
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseService Основание
     */
    public function __construct(\gisgkh\types\HouseManagement\BaseServiceType $BaseService = null)
    {
        $this->BaseService = $BaseService;
    }
}