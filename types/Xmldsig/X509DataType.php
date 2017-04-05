<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class X509DataType
{
    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\X509IssuerSerialType
     */
     public $X509IssuerSerial = null;

    /**
     * 
     * 
     * @var string
     */
     public $X509SKI = null;

    /**
     * 
     * 
     * @var string
     */
     public $X509SubjectName = null;

    /**
     * 
     * 
     * @var string
     */
     public $X509Certificate = null;

    /**
     * 
     * 
     * @var string
     */
     public $X509CRL = null;

    /**
     * @param \gisgkh\types\Xmldsig\X509IssuerSerialType $X509IssuerSerial 
     * @param string $X509SKI 
     * @param string $X509SubjectName 
     * @param string $X509Certificate 
     * @param string $X509CRL 
     */
    public function __construct(\gisgkh\types\Xmldsig\X509IssuerSerialType $X509IssuerSerial = null, string $X509SKI = null, string $X509SubjectName = null, string $X509Certificate = null, string $X509CRL = null)
    {
        $this->X509IssuerSerial = $X509IssuerSerial;
        $this->X509SKI = $X509SKI;
        $this->X509SubjectName = $X509SubjectName;
        $this->X509Certificate = $X509Certificate;
        $this->X509CRL = $X509CRL;
    }
}