<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class ObjectType
{
    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * 
     * 
     * @var string
     */
    public $MimeType = null;

    /**
     * 
     * 
     * @var string
     */
    public $Encoding = null;

    /**
     * @param string $Id 
     * @param string $MimeType 
     * @param string $Encoding 
     */
    public function __construct($Id = null, $MimeType = null, $Encoding = null)
    {
        $this->Id = $Id;
        $this->MimeType = $MimeType;
        $this->Encoding = $Encoding;
    }
}