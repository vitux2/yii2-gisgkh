<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип импорта оснований ЛС
 */
class AccountReasonsImportType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\AccountReasonsImportType\SupplyResourceContract[]
     */
     public $SupplyResourceContract = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\AccountReasonsImportType\SocialHireContract
     */
     public $SocialHireContract = null;

    /**
     * @param \gisgkh\types\HouseManagement\AccountReasonsImportType\SupplyResourceContract[] [$SupplyResourceContract] 
     * @param \gisgkh\types\HouseManagement\AccountReasonsImportType\SocialHireContract [$SocialHireContract] 
     */
    public function __construct(array $SupplyResourceContract = [], \gisgkh\types\HouseManagement\AccountReasonsImportType\SocialHireContract $SocialHireContract = null)
    {
        $this->SupplyResourceContract = $SupplyResourceContract;
        $this->SocialHireContract = $SocialHireContract;
    }
}