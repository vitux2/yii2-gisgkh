<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики ИПУ жилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
 */
class ResidentialPremiseDevice
{
    /**
     * Идентификатор помещения (тип = жилое помещение)
     * 
     * @var string
     */
     public $PremiseGUID = null;

    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = [];

    /**
     * @param string $PremiseGUID Идентификатор помещения (тип = жилое помещение)
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(string $PremiseGUID = null, array $AccountGUID = [])
    {
        $this->PremiseGUID = $PremiseGUID;
        $this->AccountGUID = $AccountGUID;
    }
}