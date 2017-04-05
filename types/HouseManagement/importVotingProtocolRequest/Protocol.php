<?php

namespace gisgkh\types\HouseManagement\importVotingProtocolRequest;

/**
 * Протокол ОСС
 */
class Protocol extends \gisgkh\types\HouseManagement\ProtocolType
{
    /**
     * Разместить протокол
     * 
     * @var string
     */
     public $Placing = null;

    /**
     * @param string [$Placing] Разместить протокол
     */
    public function __construct(string $Placing = null)
    {
        $this->Placing = $Placing;
    }
}