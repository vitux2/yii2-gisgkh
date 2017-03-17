<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners;

/**
 * Принятие рещшения об открытии нового специального счета
 */
class AccountOpening
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