<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners;

/**
 * Принятие решения о выборе другой кредитной организации
 */
class OtherOrganizationSelection
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string[]
     */
     public $FIASHouseGuid = [];

    /**
     * @param string[] $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     */
    public function __construct(array $FIASHouseGuid = [])
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
    }
}