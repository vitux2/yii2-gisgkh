<?php

namespace gisgkh\types\Xmldsig;

/**
 * 
 */
class KeyInfoType
{
    /**
     * 
     * 
     * @var string
     */
     public $KeyName = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\KeyValueType
     */
     public $KeyValue = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\RetrievalMethodType
     */
     public $RetrievalMethod = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\X509DataType
     */
     public $X509Data = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\PGPDataType
     */
     public $PGPData = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Xmldsig\SPKIDataType
     */
     public $SPKIData = null;

    /**
     * 
     * 
     * @var string
     */
     public $MgmtData = null;

    /**
     * 
     * 
     * @var string
     */
    public $Id = null;

    /**
     * @param string $KeyName 
     * @param \gisgkh\types\Xmldsig\KeyValueType $KeyValue 
     * @param \gisgkh\types\Xmldsig\RetrievalMethodType $RetrievalMethod 
     * @param \gisgkh\types\Xmldsig\X509DataType $X509Data 
     * @param \gisgkh\types\Xmldsig\PGPDataType $PGPData 
     * @param \gisgkh\types\Xmldsig\SPKIDataType $SPKIData 
     * @param string $MgmtData 
     * @param string $Id 
     */
    public function __construct(string $KeyName = null, \gisgkh\types\Xmldsig\KeyValueType $KeyValue = null, \gisgkh\types\Xmldsig\RetrievalMethodType $RetrievalMethod = null, \gisgkh\types\Xmldsig\X509DataType $X509Data = null, \gisgkh\types\Xmldsig\PGPDataType $PGPData = null, \gisgkh\types\Xmldsig\SPKIDataType $SPKIData = null, string $MgmtData = null, $Id = null)
    {
        $this->KeyName = $KeyName;
        $this->KeyValue = $KeyValue;
        $this->RetrievalMethod = $RetrievalMethod;
        $this->X509Data = $X509Data;
        $this->PGPData = $PGPData;
        $this->SPKIData = $SPKIData;
        $this->MgmtData = $MgmtData;
        $this->Id = $Id;
    }
}