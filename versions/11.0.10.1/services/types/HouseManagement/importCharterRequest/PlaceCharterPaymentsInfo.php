<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Размещение сведений о размере платы 
 */
class PlaceCharterPaymentsInfo extends \gisgkh\types\HouseManagement\CharterPaymentsInfoType
{
    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     */
    public function __construct(string $CharterVersionGUID = null)
    {
        $this->CharterVersionGUID = $CharterVersionGUID;
    }
}