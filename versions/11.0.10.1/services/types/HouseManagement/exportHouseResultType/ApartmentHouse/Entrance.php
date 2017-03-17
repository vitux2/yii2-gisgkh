<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse;

/**
 * Подъезд
 */
class Entrance extends \gisgkh\types\HouseManagement\EntranceExportType
{
    /**
     * Дата модификации данных подъезда
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Идентификатор подъезда
     * 
     * @var string
     */
     public $EntranceGUID = null;

    /**
     * @param string $ModificationDate Дата модификации данных подъезда
     * @param string $EntranceGUID Идентификатор подъезда
     */
    public function __construct(string $ModificationDate = null, string $EntranceGUID = null)
    {
        $this->ModificationDate = $ModificationDate;
        $this->EntranceGUID = $EntranceGUID;
    }
}