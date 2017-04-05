<?php

namespace gisgkh\types\HouseManagement;

/**
 * Подъезд (обновление данных для РСО)
 */
class EntranceUpdateRSOType
{
    /**
     * Номер подъезда
     * 
     * @var string
     */
     public $EntranceNum = null;

    /**
     * ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * 
     * @var string
     */
     public $FIASChildHouseGuid = null;

    /**
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string $EntranceNum Номер подъезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $EntranceNum = null, string $FIASChildHouseGuid = null, string $TerminationDate = null)
    {
        $this->EntranceNum = $EntranceNum;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->TerminationDate = $TerminationDate;
    }
}