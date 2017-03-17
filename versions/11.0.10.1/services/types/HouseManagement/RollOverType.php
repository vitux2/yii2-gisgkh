<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class RollOverType
{
    /**
     * Признак пролонгации 
     * 
     * @var string
     */
     public $RollOver = null;

    /**
     * @param string $RollOver Признак пролонгации 
     */
    public function __construct(string $RollOver = null)
    {
        $this->RollOver = $RollOver;
    }
}