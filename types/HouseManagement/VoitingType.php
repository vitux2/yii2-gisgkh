<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class VoitingType
{
    /**
     * Место проведения собрания
     * 
     * @var string
     */
     public $VotingPlace = null;

    /**
     * @param string $VotingPlace Место проведения собрания
     */
    public function __construct(string $VotingPlace = null)
    {
        $this->VotingPlace = $VotingPlace;
    }
}