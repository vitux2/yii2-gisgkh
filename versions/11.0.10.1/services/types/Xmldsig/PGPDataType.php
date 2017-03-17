<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class PGPDataType
{
    /**
     * 
     * 
     * @var string
     */
     public $PGPKeyID = null;

    /**
     * 
     * 
     * @var string
     */
     public $PGPKeyPacket = null;

    /**
     * 
     * 
     * @var string
     */
     public $PGPKeyPacket = null;

    /**
     * @param string $PGPKeyID 
     * @param string [$PGPKeyPacket] 
     * @param string $PGPKeyPacket 
     */
    public function __construct(string $PGPKeyID = null, string $PGPKeyPacket = null, string $PGPKeyPacket = null)
    {
        $this->PGPKeyID = $PGPKeyID;
        $this->PGPKeyPacket = $PGPKeyPacket;
        $this->PGPKeyPacket = $PGPKeyPacket;
    }
}