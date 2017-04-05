<?php

namespace gisgkh\types\HouseManagement;

/**
 * Подъезд (для экспорта)
 */
class EntranceExportType
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
     * Этажность
     * 
     * @var string
     */
     public $StoreysCount = null;

    /**
     * Год постройки
     * 
     * @var string
     */
     public $CreationYear = null;

    /**
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string $EntranceNum Номер подъезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param string [$StoreysCount] Этажность
     * @param string [$CreationYear] Год постройки
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $EntranceNum = null, string $FIASChildHouseGuid = null, string $StoreysCount = null, string $CreationYear = null, string $TerminationDate = null)
    {
        $this->EntranceNum = $EntranceNum;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->StoreysCount = $StoreysCount;
        $this->CreationYear = $CreationYear;
        $this->TerminationDate = $TerminationDate;
    }
}