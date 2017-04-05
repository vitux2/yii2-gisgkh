<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Прекращение действия устава
 */
class TerminateCharter extends \gisgkh\types\HouseManagement\TerminateType
{
    /**
     * Причина прекращения действия устава
     * 
     * @var string
     */
     public $Reason = null;

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * @param string $Reason Причина прекращения действия устава
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     */
    public function __construct(string $Reason = null, string $CharterVersionGUID = null)
    {
        $this->Reason = $Reason;
        $this->CharterVersionGUID = $CharterVersionGUID;
    }
}