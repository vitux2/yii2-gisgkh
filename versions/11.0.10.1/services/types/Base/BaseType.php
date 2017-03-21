<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип бизнес-сообщения с подписью
 */
class BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SignatureType
     */
     public $Signature = null;

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param \gisgkh\types\Xmldsig\SignatureType [$Signature] 
     * @param string $Id 
     */
    public function __construct(\gisgkh\types\Xmldsig\SignatureType $Signature = null, $Id = null)
    {
        $this->Signature = $Signature;
        $this->Id = $Id;
    }
}