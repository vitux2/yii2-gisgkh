<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject;

/**
 * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
 */
class HouseService extends \gisgkh\types\HouseManagement\ContractServiceType
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