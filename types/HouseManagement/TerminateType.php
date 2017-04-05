<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class TerminateType
{
    /**
     * Дата расторжения, прекращения действия устава
     * 
     * @var string
     */
     public $Terminate = null;

    /**
     * @param string $Terminate Дата расторжения, прекращения действия устава
     */
    public function __construct(string $Terminate = null)
    {
        $this->Terminate = $Terminate;
    }
}