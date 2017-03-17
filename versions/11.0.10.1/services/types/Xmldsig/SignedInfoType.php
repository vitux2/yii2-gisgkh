<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignedInfoType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\CanonicalizationMethodType
     */
     public $CanonicalizationMethod = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SignatureMethodType
     */
     public $SignatureMethod = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\ReferenceType[]
     */
     public $Reference = [];

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param \gisgkh\types\Xmldsig\CanonicalizationMethodType $CanonicalizationMethod 
     * @param \gisgkh\types\Xmldsig\SignatureMethodType $SignatureMethod 
     * @param \gisgkh\types\Xmldsig\ReferenceType[] $Reference 
     * @param string $Id 
     */
    public function __construct(\gisgkh\types\Xmldsig\CanonicalizationMethodType $CanonicalizationMethod = null, \gisgkh\types\Xmldsig\SignatureMethodType $SignatureMethod = null, array $Reference = [], $Id = null)
    {
        $this->CanonicalizationMethod = $CanonicalizationMethod;
        $this->SignatureMethod = $SignatureMethod;
        $this->Reference = $Reference;
        $this->Id = $Id;
    }
}