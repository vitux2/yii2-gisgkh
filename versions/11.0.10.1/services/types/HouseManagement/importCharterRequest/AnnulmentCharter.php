<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Аннулирование устава
 */
class AnnulmentCharter extends \gisgkh\types\HouseManagement\AnnulmentType
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