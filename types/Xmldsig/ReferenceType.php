<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class ReferenceType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\TransformsType
     */
     public $Transforms = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\DigestMethodType
     */
     public $DigestMethod = null;

    /**
     * 
     * 
     * @var string
     */
     public $DigestValue = null;

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * 
     * 
     * @var string
     */
    public $URI = null;

    /**
     * 
     * 
     * @var string
     */
    public $Type = null;

    /**
     * @param \gisgkh\types\Xmldsig\TransformsType [$Transforms] 
     * @param \gisgkh\types\Xmldsig\DigestMethodType $DigestMethod 
     * @param string $DigestValue 
     * @param string $Id 
     * @param string $URI 
     * @param string $Type 
     */
    public function __construct(\gisgkh\types\Xmldsig\TransformsType $Transforms = null, \gisgkh\types\Xmldsig\DigestMethodType $DigestMethod = null, string $DigestValue = null, $Id = null, $URI = null, $Type = null)
    {
        $this->Transforms = $Transforms;
        $this->DigestMethod = $DigestMethod;
        $this->DigestValue = $DigestValue;
        $this->Id = $Id;
        $this->URI = $URI;
        $this->Type = $Type;
    }
}