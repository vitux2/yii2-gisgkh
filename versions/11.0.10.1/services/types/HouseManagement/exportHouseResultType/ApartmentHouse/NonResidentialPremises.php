<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\ApartmentHouse;

/**
 * Нежилое помещение
 */
class NonResidentialPremises extends \gisgkh\types\HouseManagement\NonResidentialPremisesExportType
{
    /**
     * Уникальный номер помещения
     * 
     * @var string
     */
     public $PremisesUniqueNumber = null;

    /**
     * Дата модификации данных помещения
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Идентификатор помещения
     * 
     * @var string
     */
     public $PremisesGUID = null;

    /**
     * @param string $PremisesUniqueNumber Уникальный номер помещения
     * @param string $ModificationDate Дата модификации данных помещения
     * @param string $PremisesGUID Идентификатор помещения
     */
    public function __construct(string $PremisesUniqueNumber = null, string $ModificationDate = null, string $PremisesGUID = null)
    {
        $this->PremisesUniqueNumber = $PremisesUniqueNumber;
        $this->ModificationDate = $ModificationDate;
        $this->PremisesGUID = $PremisesGUID;
    }
}