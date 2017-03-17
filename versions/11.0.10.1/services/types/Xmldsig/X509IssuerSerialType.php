<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class X509IssuerSerialType
{
    /**
     * 
     * 
     * @var string
     */
     public $X509IssuerName = null;

    /**
     * 
     * 
     * @var string
     */
     public $X509SerialNumber = null;

    /**
     * @param string $X509IssuerName 
     * @param string $X509SerialNumber 
     */
    public function __construct(string $X509IssuerName = null, string $X509SerialNumber = null)
    {
        $this->X509IssuerName = $X509IssuerName;
        $this->X509SerialNumber = $X509SerialNumber;
    }
}