<?php

namespace gisgkh\types\HouseManagement;

/**
 * Комната (для импорта от ОМС)
 */
class RoomOMSType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
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
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = null;

    /**
     * @param string $RoomNumber Номер комнаты
     * @param string $Square Площадь
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $RoomNumber = null, string $Square = null, array $OGFData = null)
    {
        $this->RoomNumber = $RoomNumber;
        $this->Square = $Square;
        $this->OGFData = $OGFData;
    }
}