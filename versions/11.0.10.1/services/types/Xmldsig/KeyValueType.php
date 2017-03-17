<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class KeyValueType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\DSAKeyValueType
     */
     public $DSAKeyValue = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\RSAKeyValueType
     */
     public $RSAKeyValue = null;

    /**
     * @param \gisgkh\types\Xmldsig\DSAKeyValueType $DSAKeyValue 
     * @param \gisgkh\types\Xmldsig\RSAKeyValueType $RSAKeyValue 
     */
    public function __construct(\gisgkh\types\Xmldsig\DSAKeyValueType $DSAKeyValue = null, \gisgkh\types\Xmldsig\RSAKeyValueType $RSAKeyValue = null)
    {
        $this->DSAKeyValue = $DSAKeyValue;
        $this->RSAKeyValue = $RSAKeyValue;
    }
}