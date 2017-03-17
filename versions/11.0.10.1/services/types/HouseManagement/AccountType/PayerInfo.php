<?php

namespace gisgkh\types\HouseManagement\AccountType;

/**
 * Сведения о платильщике
 */
class PayerInfo
{
    /**
     * Является нанимателем?
     * 
     * @var string
     */
     public $IsRenter = null;

    /**
     * Физическое лицо/индивидуальный предприниматель.
     * 
     * @var \gisgkh\types\HouseManagement\AccountIndType
     */
     public $Ind = null;

    /**
     * Организация. ЮЛ/ИП/ОП. Ссылка на реестр организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType
     */
     public $Org = null;

    /**
     * @param string [$IsRenter] Является нанимателем?
     * @param \gisgkh\types\HouseManagement\AccountIndType $Ind Физическое лицо/индивидуальный предприниматель.
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $Org Организация. ЮЛ/ИП/ОП. Ссылка на реестр организаций
     */
    public function __construct(string $IsRenter = null, \gisgkh\types\HouseManagement\AccountIndType $Ind = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $Org = null)
    {
        $this->IsRenter = $IsRenter;
        $this->Ind = $Ind;
        $this->Org = $Org;
    }
}