<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class RSAKeyValueType
{
    /**
     * 
     * 
     * @var string
     */
     public $Modulus = null;

    /**
     * 
     * 
     * @var string
     */
     public $Exponent = null;

    /**
     * @param string $Modulus 
     * @param string $Exponent 
     */
    public function __construct(string $Modulus = null, string $Exponent = null)
    {
        $this->Modulus = $Modulus;
        $this->Exponent = $Exponent;
    }
}