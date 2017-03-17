<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class SignatureType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SignedInfoType
     */
     public $SignedInfo = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SignatureValueType
     */
     public $SignatureValue = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\KeyInfoType
     */
     public $KeyInfo = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\ObjectType[]
     */
     public $Object = [];

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param \gisgkh\types\Xmldsig\SignedInfoType $SignedInfo 
     * @param \gisgkh\types\Xmldsig\SignatureValueType $SignatureValue 
     * @param \gisgkh\types\Xmldsig\KeyInfoType [$KeyInfo] 
     * @param \gisgkh\types\Xmldsig\ObjectType[] [$Object] 
     * @param string $Id 
     */
    public function __construct(\gisgkh\types\Xmldsig\SignedInfoType $SignedInfo = null, \gisgkh\types\Xmldsig\SignatureValueType $SignatureValue = null, \gisgkh\types\Xmldsig\KeyInfoType $KeyInfo = null, array $Object = [], $Id = null)
    {
        $this->SignedInfo = $SignedInfo;
        $this->SignatureValue = $SignatureValue;
        $this->KeyInfo = $KeyInfo;
        $this->Object = $Object;
        $this->Id = $Id;
    }
}