<?php

namespace gisgkh\types\HouseManagement\AccountType;

/**
 * Помещение
 */
class Accommodation
{
    /**
     * Идентификатор помещения
     * 
     * @var string
     */
     public $PremisesGUID = null;

    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Идентификатор комнаты
     * 
     * @var string
     */
     public $LivingRoomGUID = null;

    /**
     * Доля внесения платы, размер доли в %
     * 
     * @var string
     */
     public $SharePercent = null;

    /**
     * @param string $PremisesGUID Идентификатор помещения
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string $LivingRoomGUID Идентификатор комнаты
     * @param string [$SharePercent] Доля внесения платы, размер доли в %
     */
    public function __construct(string $PremisesGUID = null, string $FIASHouseGuid = null, string $LivingRoomGUID = null, string $SharePercent = null)
    {
        $this->PremisesGUID = $PremisesGUID;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->LivingRoomGUID = $LivingRoomGUID;
        $this->SharePercent = $SharePercent;
    }
}