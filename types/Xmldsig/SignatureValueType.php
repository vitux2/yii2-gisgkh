<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignatureValueType
{
    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param string $Id 
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
    }
}