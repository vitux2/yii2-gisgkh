<?php

namespace gisgkh\types\HouseManagement;

/**
 * Комната (обновление данных для РСО)
 */
class RoomUpdateRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
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
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string [$RoomNumber] Номер комнаты
     * @param string [$Square] Площадь
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $RoomNumber = null, string $Square = null, string $TerminationDate = null)
    {
        $this->RoomNumber = $RoomNumber;
        $this->Square = $Square;
        $this->TerminationDate = $TerminationDate;
    }
}