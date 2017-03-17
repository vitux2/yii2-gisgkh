<?php

namespace gisgkh\types\HouseManagement;

/**
 * ДУ
 */
class ContractType
{
    /**
     * Номер документа 
     * 
     * @var string
     */
     public $DocNum = null;

    /**
     * Дата заключения
     * 
     * @var string
     */
     public $SigningDate = null;

    /**
     * Дата вступления в силу
     * 
     * @var string
     */
     public $EffectiveDate = null;

    /**
     * Планируемая дата окончания
     * 
     * @var string
     */
     public $PlanDateComptetion = null;

    /**
     * Срок действия (заполняется при экспорте)
     * 
     * @var \gisgkh\types\HouseManagement\ContractType\Validity
     */
     public $Validity = null;

    /**
     * Собственник объекта жилищного фонда  (можно указать только один действущий управляемый объект)
     * 
     * @var string
     */
     public $Owners = null;

    /**
     * ТСЖ/Кооператив
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $Cooperative = null;

    /**
     * Собственник муниципального жилья
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $MunicipalHousing = null;

    /**
     * Застройщик
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $BuildingOwner = null;

    /**
     * Сведения о протоколе открытого конкурса/собрания собственников
     * 
     * @var \gisgkh\types\HouseManagement\ContractType\Protocol
     */
     public $Protocol = null;

    /**
     * 
Ссылка на НСИ "Основание заключения договора" (реестровый номер 58).
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ContractBase = null;

    /**
     * Сведения о сроках. Для EditContract допускается указывать пустым, сведения будут скопированы из предыдущей версии.
     * 
     * @var \gisgkh\types\HouseManagement\DateDetailsType
     */
     public $DateDetails = null;

    /**
     * Договор на управление и приложения
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ContractAttachment = [];

    /**
     * Дополнительное соглашение
     * 
     * @var \gisgkh\types\HouseManagement\ContractType\AgreementAttachment[]
     */
     public $AgreementAttachment = [];

    /**
     * @param string $DocNum Номер документа 
     * @param string $SigningDate Дата заключения
     * @param string $EffectiveDate Дата вступления в силу
     * @param string $PlanDateComptetion Планируемая дата окончания
     * @param \gisgkh\types\HouseManagement\ContractType\Validity [$Validity] Срок действия (заполняется при экспорте)
     * @param string $Owners Собственник объекта жилищного фонда  (можно указать только один действущий управляемый объект)
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $Cooperative ТСЖ/Кооператив
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $MunicipalHousing Собственник муниципального жилья
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $BuildingOwner Застройщик
     * @param \gisgkh\types\HouseManagement\ContractType\Protocol [$Protocol] Сведения о протоколе открытого конкурса/собрания собственников
     * @param \gisgkh\types\NsiBase\nsiRef $ContractBase 
Ссылка на НСИ "Основание заключения договора" (реестровый номер 58).
     * @param \gisgkh\types\HouseManagement\DateDetailsType [$DateDetails] Сведения о сроках. Для EditContract допускается указывать пустым, сведения будут скопированы из предыдущей версии.
     * @param \gisgkh\types\Base\AttachmentType[] $ContractAttachment Договор на управление и приложения
     * @param \gisgkh\types\HouseManagement\ContractType\AgreementAttachment[] [$AgreementAttachment] Дополнительное соглашение
     */
    public function __construct(string $DocNum = null, string $SigningDate = null, string $EffectiveDate = null, string $PlanDateComptetion = null, \gisgkh\types\HouseManagement\ContractType\Validity $Validity = null, string $Owners = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $Cooperative = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $MunicipalHousing = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $BuildingOwner = null, \gisgkh\types\HouseManagement\ContractType\Protocol $Protocol = null, \gisgkh\types\NsiBase\nsiRef $ContractBase = null, \gisgkh\types\HouseManagement\DateDetailsType $DateDetails = null, array $ContractAttachment = [], array $AgreementAttachment = [])
    {
        $this->DocNum = $DocNum;
        $this->SigningDate = $SigningDate;
        $this->EffectiveDate = $EffectiveDate;
        $this->PlanDateComptetion = $PlanDateComptetion;
        $this->Validity = $Validity;
        $this->Owners = $Owners;
        $this->Cooperative = $Cooperative;
        $this->MunicipalHousing = $MunicipalHousing;
        $this->BuildingOwner = $BuildingOwner;
        $this->Protocol = $Protocol;
        $this->ContractBase = $ContractBase;
        $this->DateDetails = $DateDetails;
        $this->ContractAttachment = $ContractAttachment;
        $this->AgreementAttachment = $AgreementAttachment;
    }
}