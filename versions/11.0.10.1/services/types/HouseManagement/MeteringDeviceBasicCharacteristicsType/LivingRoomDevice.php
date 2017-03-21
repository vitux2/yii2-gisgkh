<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики комнатного ИПУ (значение справочника "Вид прибора учета" = Комнатный
 */
class LivingRoomDevice
{
    /**
     * Идентификатор комнаты
     * 
     * @var string[]
     */
     public $LivingRoomGUID = null;

    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = null;

    /**
     * @param string[] $LivingRoomGUID Идентификатор комнаты
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(array $LivingRoomGUID = null, array $AccountGUID = null)
    {
        $this->LivingRoomGUID = $LivingRoomGUID;
        $this->AccountGUID = $AccountGUID;
    }
}