<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse;

/**
 * Лифты
 */
class Lift extends \gisgkh\types\HouseManagement\LiftExportType
{
    /**
     * Дата модификации данных лифта
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Идентификатор лифта
     * 
     * @var string
     */
     public $LiftGUID = null;

    /**
     * @param string $ModificationDate Дата модификации данных лифта
     * @param string $LiftGUID Идентификатор лифта
     */
    public function __construct(string $ModificationDate = null, string $LiftGUID = null)
    {
        $this->ModificationDate = $ModificationDate;
        $this->LiftGUID = $LiftGUID;
    }
}