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
     public $LivingRoomGUID = [];

    /**
     * Идентификатор ЛС
     * 
     * @var string[]
     */
     public $AccountGUID = [];

    /**
     * @param string[] $LivingRoomGUID Идентификатор комнаты
     * @param string[] $AccountGUID Идентификатор ЛС
     */
    public function __construct(array $LivingRoomGUID = [], array $AccountGUID = [])
    {
        $this->LivingRoomGUID = $LivingRoomGUID;
        $this->AccountGUID = $AccountGUID;
    }
}