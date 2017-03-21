<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class TransformType
{
    /**
     * 
     * 
     * @var string
     */
     public $XPath = null;

    /**
     * 
     * 
     * @var string
     */
    public $Algorithm = null;

    /**
     * @param string $XPath 
     * @param string $Algorithm 
     */
    public function __construct(string $XPath = null, $Algorithm = null)
    {
        $this->XPath = $XPath;
        $this->Algorithm = $Algorithm;
    }
}