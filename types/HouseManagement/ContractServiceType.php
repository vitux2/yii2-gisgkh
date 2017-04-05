<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class ContractServiceType
{
    /**
     * Ссылка на НСИ 
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ServiceType = null;

    /**
     * Дата начала предоставления услуги 
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Дата окончания предоставления услуги
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $ServiceType Ссылка на НСИ 
     * @param string $StartDate Дата начала предоставления услуги 
     * @param string $EndDate Дата окончания предоставления услуги
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $ServiceType = null, string $StartDate = null, string $EndDate = null)
    {
        $this->ServiceType = $ServiceType;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
    }
}