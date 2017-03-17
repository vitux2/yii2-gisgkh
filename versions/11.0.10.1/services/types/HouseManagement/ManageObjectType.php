<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class ManageObjectType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Дата начала предоставления услуг
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Дата окончания предоставления услуг
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string $StartDate Дата начала предоставления услуг
     * @param string [$EndDate] Дата окончания предоставления услуг
     */
    public function __construct(string $FIASHouseGuid = null, string $StartDate = null, string $EndDate = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
    }
}