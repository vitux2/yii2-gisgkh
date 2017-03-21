<?php

namespace gisgkh\types\HouseManagement;

/**
 * Подъезд (для импорта от РСО)
 */
class EntranceRSOType
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
     * @param string $EntranceNum Номер подъезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     */
    public function __construct(string $EntranceNum = null, string $FIASChildHouseGuid = null)
    {
        $this->EntranceNum = $EntranceNum;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
    }
}