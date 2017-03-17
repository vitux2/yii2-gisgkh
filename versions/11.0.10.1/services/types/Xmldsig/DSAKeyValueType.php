<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class DSAKeyValueType
{
    /**
     * 
     * 
     * @var string
     */
     public $P = null;

    /**
     * 
     * 
     * @var string
     */
     public $Q = null;

    /**
     * 
     * 
     * @var string
     */
     public $G = null;

    /**
     * 
     * 
     * @var string
     */
     public $Y = null;

    /**
     * 
     * 
     * @var string
     */
     public $J = null;

    /**
     * 
     * 
     * @var string
     */
     public $Seed = null;

    /**
     * 
     * 
     * @var string
     */
     public $PgenCounter = null;

    /**
     * @param string $P 
     * @param string $Q 
     * @param string [$G] 
     * @param string $Y 
     * @param string [$J] 
     * @param string $Seed 
     * @param string $PgenCounter 
     */
    public function __construct(string $P = null, string $Q = null, string $G = null, string $Y = null, string $J = null, string $Seed = null, string $PgenCounter = null)
    {
        $this->P = $P;
        $this->Q = $Q;
        $this->G = $G;
        $this->Y = $Y;
        $this->J = $J;
        $this->Seed = $Seed;
        $this->PgenCounter = $PgenCounter;
    }
}