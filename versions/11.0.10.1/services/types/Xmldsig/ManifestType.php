<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class ManifestType
{
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
     * @param \gisgkh\types\Xmldsig\ReferenceType[] $Reference 
     * @param string $Id 
     */
    public function __construct(array $Reference = [], $Id = null)
    {
        $this->Reference = $Reference;
        $this->Id = $Id;
    }
}