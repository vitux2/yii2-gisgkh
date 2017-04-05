<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class TransformsType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\TransformType[]
     */
     public $Transform = null;

    /**
     * @param \gisgkh\types\Xmldsig\TransformType[] $Transform 
     */
    public function __construct(array $Transform = null)
    {
        $this->Transform = $Transform;
    }
}