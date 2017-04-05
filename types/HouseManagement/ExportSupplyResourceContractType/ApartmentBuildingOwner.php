<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Собственник или пользователь жилого (нежилого) помещения в МКД
 */
class ApartmentBuildingOwner
{
    /**
     * Организация (Юридическое лицо или индивидуальный предприниматель)
     * 
     * @var \gisgkh\types\HouseManagement\DRSORegOrgType
     */
     public $RegOrg = null;

    /**
     * Физическое лицо
     * 
     * @var \gisgkh\types\HouseManagement\DRSOIndType
     */
     public $Ind = null;

    /**
     * @param \gisgkh\types\HouseManagement\DRSORegOrgType $RegOrg Организация (Юридическое лицо или индивидуальный предприниматель)
     * @param \gisgkh\types\HouseManagement\DRSOIndType $Ind Физическое лицо
     */
    public function __construct(\gisgkh\types\HouseManagement\DRSORegOrgType $RegOrg = null, \gisgkh\types\HouseManagement\DRSOIndType $Ind = null)
    {
        $this->RegOrg = $RegOrg;
        $this->Ind = $Ind;
    }
}