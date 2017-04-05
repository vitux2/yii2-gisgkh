<?php

namespace gisgkh\types\HouseManagement;

/**
 * Объект жилищного фонда
 */
class ObjectAddressType
{
    /**
     * Адрес дома
Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Номер квартиры (помещения)
     * 
     * @var string
     */
     public $ApartmentNumber = null;

    /**
     * Номер комнаты (указывается в случае квартиры коммунального заселения)
     * 
     * @var string
     */
     public $RoomNumber = null;

    /**
     * @param string $FIASHouseGuid Адрес дома
Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$ApartmentNumber] Номер квартиры (помещения)
     * @param string [$RoomNumber] Номер комнаты (указывается в случае квартиры коммунального заселения)
     */
    public function __construct(string $FIASHouseGuid = null, string $ApartmentNumber = null, string $RoomNumber = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ApartmentNumber = $ApartmentNumber;
        $this->RoomNumber = $RoomNumber;
    }
}