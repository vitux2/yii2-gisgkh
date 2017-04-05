<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignaturePropertiesType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SignaturePropertyType[]
     */
     public $SignatureProperty = null;

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param \gisgkh\types\Xmldsig\SignaturePropertyType[] $SignatureProperty 
     * @param string $Id 
     */
    public function __construct(array $SignatureProperty = null, $Id = null)
    {
        $this->SignatureProperty = $SignatureProperty;
        $this->Id = $Id;
    }
}