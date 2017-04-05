<?php

namespace gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject\Add;

/**
 * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
 */
class HouseService extends \gisgkh\types\HouseManagement\ContractServiceType
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