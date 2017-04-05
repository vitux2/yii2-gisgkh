<?php

namespace gisgkh\types\HouseManagement\importCharterRequest;

/**
 * Аннулирование сведений о размере платы 
 */
class AnnulmentCharterPaymentsInfo
{
    /**
     * Идентификатор версии сведений о размере платы по уставу
     * 
     * @var string
     */
     public $CharterPaymentsInfoVersionGUID = null;

    /**
     * @param string $CharterPaymentsInfoVersionGUID Идентификатор версии сведений о размере платы по уставу
     */
    public function __construct(string $CharterPaymentsInfoVersionGUID = null)
    {
        $this->CharterPaymentsInfoVersionGUID = $CharterPaymentsInfoVersionGUID;
    }
}