<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики ИПУ нежилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
 */
class NonResidentialPremiseDevice
{
    /**
     * Идентификатор помещения (тип = нежилое помещение)
     * 
     * @var string
     */
     public $PremiseGUID = null;

    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = null;

    /**
     * @param string $PremiseGUID Идентификатор помещения (тип = нежилое помещение)
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(string $PremiseGUID = null, array $AccountGUID = null)
    {
        $this->PremiseGUID = $PremiseGUID;
        $this->AccountGUID = $AccountGUID;
    }
}