<?php

namespace gisgkh\types\HouseManagement\ImportResult\CommonResult;

/**
 * Заполняется для операции importAccount
 */
class ImportAccount
{
    /**
     * Единый лицевой счет
     * 
     * @var string
     */
     public $UnifiedAccountNumber = null;

    /**
     * Идентификатор жилищно-коммунальной услуги
     * 
     * @var string
     */
     public $ServiceID = null;

    /**
     * @param string $UnifiedAccountNumber Единый лицевой счет
     * @param string $ServiceID Идентификатор жилищно-коммунальной услуги
     */
    public function __construct(string $UnifiedAccountNumber = null, string $ServiceID = null)
    {
        $this->UnifiedAccountNumber = $UnifiedAccountNumber;
        $this->ServiceID = $ServiceID;
    }
}