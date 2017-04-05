<?php

namespace gisgkh\types\HouseManagement;

/**
 * Комната (обновление данных для УО)
 */
class RoomUpdateUOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
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
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string [$RoomNumber] Номер комнаты
     * @param string [$Square] Площадь
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $RoomNumber = null, string $Square = null, array $OGFData = null, string $TerminationDate = null)
    {
        $this->RoomNumber = $RoomNumber;
        $this->Square = $Square;
        $this->OGFData = $OGFData;
        $this->TerminationDate = $TerminationDate;
    }
}