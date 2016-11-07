<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Объект жилищного фонда
 *
 * @package gisgkh\types\HouseManagement
 */
class ObjectAddressType extends GisgkhType
{
    /**
     * @var string $FIASHouseGuid Адрес дома. Глобальный уникальный идентификатор дома по ФИАС
     */
    public $FIASHouseGuid = null;

    /**
     * @var string $ApartmentNumber Номер квартиры (помещения)
     */
    public $ApartmentNumber = null;

    /**
     * @var string $RoomNumber Номер комнаты (указывается в случае квартиры коммунального заселения)
     */
    public $RoomNumber = null;

}