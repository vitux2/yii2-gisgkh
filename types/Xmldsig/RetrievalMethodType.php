<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class RetrievalMethodType
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
     * @param string $URI 
     * @param string $Type 
     */
    public function __construct(\gisgkh\types\Xmldsig\TransformsType $Transforms = null, $URI = null, $Type = null)
    {
        $this->Transforms = $Transforms;
        $this->URI = $URI;
        $this->Type = $Type;
    }
}