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
     public $Transform = [];

    /**
     * @param \gisgkh\types\Xmldsig\TransformType[] $Transform 
     */
    public function __construct(array $Transform = [])
    {
        $this->Transform = $Transform;
    }
}