<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики ИПУ жилого дома (значение справочника "Вид прибора учета" = индивидуальный, тип дома = жилой дом)
 */
class ApartmentHouseDevice
{
    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = null;

    /**
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(array $AccountGUID = null)
    {
        $this->AccountGUID = $AccountGUID;
    }
}