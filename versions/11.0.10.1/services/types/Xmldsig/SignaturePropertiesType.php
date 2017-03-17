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
     public $SignatureProperty = [];

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
    public function __construct(array $SignatureProperty = [], $Id = null)
    {
        $this->SignatureProperty = $SignatureProperty;
        $this->Id = $Id;
    }
}