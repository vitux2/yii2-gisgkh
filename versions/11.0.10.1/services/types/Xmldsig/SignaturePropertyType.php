<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignaturePropertyType
{
    /**
     * 
     * 
     * @var string
     */
    public $Target = null;

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param string $Target 
     * @param string $Id 
     */
    public function __construct($Target = null, $Id = null)
    {
        $this->Target = $Target;
        $this->Id = $Id;
    }
}