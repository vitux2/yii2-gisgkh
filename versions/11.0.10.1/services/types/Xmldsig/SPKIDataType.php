<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SPKIDataType
{
    /**
     * 
     * 
     * @var string
     */
     public $SPKISexp = null;

    /**
     * @param string $SPKISexp 
     */
    public function __construct(string $SPKISexp = null)
    {
        $this->SPKISexp = $SPKISexp;
    }
}