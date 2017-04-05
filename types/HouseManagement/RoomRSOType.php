<?php

namespace gisgkh\types\HouseManagement;

/**
 * Комната (для импорта от РСО)
 */
class RoomRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Номер комнаты
     * 
     * @var string
     */
     public $RoomNumber = null;

    /**
     * Площадь
     * 
     * @var string
     */
     public $Square = null;

    /**
     * @param string $RoomNumber Номер комнаты
     * @param string [$Square] Площадь
     */
    public function __construct(string $RoomNumber = null, string $Square = null)
    {
        $this->RoomNumber = $RoomNumber;
        $this->Square = $Square;
    }
}