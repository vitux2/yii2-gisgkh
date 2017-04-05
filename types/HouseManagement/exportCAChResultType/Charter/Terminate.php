<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Charter;

/**
 * Информация о прекращении действия устава
 */
class Terminate extends \gisgkh\types\HouseManagement\TerminateType
{
    /**
     * Причина прекращения действия устава
     * 
     * @var string
     */
     public $Reason = null;

    /**
     * @param string $Reason Причина прекращения действия устава
     */
    public function __construct(string $Reason = null)
    {
        $this->Reason = $Reason;
    }
}