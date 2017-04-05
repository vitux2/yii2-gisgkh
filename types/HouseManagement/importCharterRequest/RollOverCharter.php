<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Продление срока оказания услуг
 */
class RollOverCharter extends \gisgkh\types\HouseManagement\RollOverType
{
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
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param string [$RISUHouseRequest] Формировать заявки в реестр информации о способах управления МКД (РИСУ), если сведения об управляемом объекте устава конфликтуют с РИСУ
     */
    public function __construct(string $CharterVersionGUID = null, string $RISUHouseRequest = null)
    {
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->RISUHouseRequest = $RISUHouseRequest;
    }
}