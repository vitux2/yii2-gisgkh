<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignatureMethodType
{
    /**
     * 
     * 
     * @var string
     */
     public $HMACOutputLength = null;

    /**
     * 
     * 
     * @var string
     */
    public $Algorithm = null;

    /**
     * @param string [$HMACOutputLength] 
     * @param string $Algorithm 
     */
    public function __construct(string $HMACOutputLength = null, $Algorithm = null)
    {
        $this->HMACOutputLength = $HMACOutputLength;
        $this->Algorithm = $Algorithm;
    }
}