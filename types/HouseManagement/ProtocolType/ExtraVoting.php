<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Внеочередное собрание
 */
class ExtraVoting
{
    /**
     * Сведения об инициаторах собрания
     * 
     * @var \gisgkh\types\HouseManagement\VoteInitiators[]
     */
     public $VoteInitiators = null;

    /**
     * @param \gisgkh\types\HouseManagement\VoteInitiators[] $VoteInitiators Сведения об инициаторах собрания
     */
    public function __construct(array $VoteInitiators = null)
    {
        $this->VoteInitiators = $VoteInitiators;
    }
}