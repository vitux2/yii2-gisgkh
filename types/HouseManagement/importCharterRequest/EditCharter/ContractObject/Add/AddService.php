<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add;

/**
 * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
 */
class AddService extends \gisgkh\types\HouseManagement\ContractServiceType
{
    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceCharterType
     */
     public $BaseServiceCharter = null;

    /**
     * @param \gisgkh\types\HouseManagement\BaseServiceCharterType $BaseServiceCharter Основание
     */
    public function __construct(\gisgkh\types\HouseManagement\BaseServiceCharterType $BaseServiceCharter = null)
    {
        $this->BaseServiceCharter = $BaseServiceCharter;
    }
}