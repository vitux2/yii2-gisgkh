<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Внесение изменений в версию устава
 */
class EditCharter extends \gisgkh\types\HouseManagement\CharterType
{
    /**
     * Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject[]
     */
     public $ContractObject = [];

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * Формировать заявки в реестр информации о способах управления МКД (РИСУ), если сведения об управляемом объекте устава конфликтуют с РИСУ
     * 
     * @var string
     */
     public $RISUHouseRequest = null;

    /**
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter\ContractObject[] [$ContractObject] Объект управления.  Если устав является бессрочным элемент Дата окончания предоставления жилищных услуг необходимо заполнить значением "5000"
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param string [$RISUHouseRequest] Формировать заявки в реестр информации о способах управления МКД (РИСУ), если сведения об управляемом объекте устава конфликтуют с РИСУ
     */
    public function __construct(array $ContractObject = [], string $CharterVersionGUID = null, string $RISUHouseRequest = null)
    {
        $this->ContractObject = $ContractObject;
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->RISUHouseRequest = $RISUHouseRequest;
    }
}