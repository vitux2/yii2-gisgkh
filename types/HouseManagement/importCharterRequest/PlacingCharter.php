<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Создание, редактирование устава
 */
class PlacingCharter extends \gisgkh\types\HouseManagement\CharterType
{
    /**
     * Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject[]
     */
     public $ContractObject = null;

    /**
     * Формировать заявки в реестр информации о способах управления МКД (РИСУ), если сведения об управляемом объекте устава конфликтуют с РИСУ
     * 
     * @var string
     */
     public $RISUHouseRequest = null;

    /**
     * @param \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter\ContractObject[] $ContractObject Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
     * @param string [$RISUHouseRequest] Формировать заявки в реестр информации о способах управления МКД (РИСУ), если сведения об управляемом объекте устава конфликтуют с РИСУ
     */
    public function __construct(array $ContractObject = null, string $RISUHouseRequest = null)
    {
        $this->ContractObject = $ContractObject;
        $this->RISUHouseRequest = $RISUHouseRequest;
    }
}