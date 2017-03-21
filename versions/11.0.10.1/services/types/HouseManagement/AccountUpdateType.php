<?php

namespace gisgkh\types\HouseManagement;

/**
 * Характеристика ЛС
 */
class AccountUpdateType
{
    /**
     * Количество проживающих
     * 
     * @var string
     */
     public $LivingPersonsNumber = null;

    /**
     * Собственник ФЛ. Ссылка на физлицо в реестре физлиц
     * 
     * @var \gisgkh\types\IndividualRegistryBase\IndType
     */
     public $OwnerInd = null;

    /**
     * Собственник ЮЛ/ИП/ОП. Ссылка га реестр организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $OwnerOrg = null;

    /**
     * ФЛ по договору социального наема. Ссылка на физлицо в реестре физлиц
     * 
     * @var \gisgkh\types\IndividualRegistryBase\IndType
     */
     public $RenterInd = null;

    /**
     * Собственник ЮЛ/ИП/ОП. Ссылка га реестр организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $RenterOrg = null;

    /**
     * Нежилая площадь 
     * 
     * @var string
     */
     public $TotalSquare = null;

    /**
     * Нежилая площадь 
     * 
     * @var string
     */
     public $ResidentialSquare = null;

    /**
     * Нежилая площадь 
     * 
     * @var string
     */
     public $NonResidentialSquare = null;

    /**
     * Счет закрыт
     * 
     * @var \gisgkh\types\HouseManagement\ClosedAccountAttributesType
     */
     public $Closed = null;

    /**
     * @param string $LivingPersonsNumber Количество проживающих
     * @param \gisgkh\types\IndividualRegistryBase\IndType $OwnerInd Собственник ФЛ. Ссылка на физлицо в реестре физлиц
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $OwnerOrg Собственник ЮЛ/ИП/ОП. Ссылка га реестр организаций
     * @param \gisgkh\types\IndividualRegistryBase\IndType $RenterInd ФЛ по договору социального наема. Ссылка на физлицо в реестре физлиц
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $RenterOrg Собственник ЮЛ/ИП/ОП. Ссылка га реестр организаций
     * @param string [$TotalSquare] Нежилая площадь 
     * @param string [$ResidentialSquare] Нежилая площадь 
     * @param string [$NonResidentialSquare] Нежилая площадь 
     * @param \gisgkh\types\HouseManagement\ClosedAccountAttributesType [$Closed] Счет закрыт
     */
    public function __construct(string $LivingPersonsNumber = null, \gisgkh\types\IndividualRegistryBase\IndType $OwnerInd = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $OwnerOrg = null, \gisgkh\types\IndividualRegistryBase\IndType $RenterInd = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $RenterOrg = null, string $TotalSquare = null, string $ResidentialSquare = null, string $NonResidentialSquare = null, \gisgkh\types\HouseManagement\ClosedAccountAttributesType $Closed = null)
    {
        $this->LivingPersonsNumber = $LivingPersonsNumber;
        $this->OwnerInd = $OwnerInd;
        $this->OwnerOrg = $OwnerOrg;
        $this->RenterInd = $RenterInd;
        $this->RenterOrg = $RenterOrg;
        $this->TotalSquare = $TotalSquare;
        $this->ResidentialSquare = $ResidentialSquare;
        $this->NonResidentialSquare = $NonResidentialSquare;
        $this->Closed = $Closed;
    }
}