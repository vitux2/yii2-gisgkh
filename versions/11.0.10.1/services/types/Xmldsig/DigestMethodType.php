<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class DigestMethodType
{
    /**
     * 
     * 
     * @var string
     */
    public $Algorithm = null;

    /**
     * @param string $Algorithm 
     */
    public function __construct($Algorithm = null)
    {
        $this->Algorithm = $Algorithm;
    }
}