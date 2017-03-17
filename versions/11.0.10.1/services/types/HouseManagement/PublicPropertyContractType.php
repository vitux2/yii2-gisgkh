<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class PublicPropertyContractType
{
    /**
     * Организация
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $Organization = null;

    /**
     * Физическое лицо
     * 
     * @var \gisgkh\types\IndividualRegistryBase\IndType
     */
     public $Entrepreneur = null;

    /**
     * Адрес. Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата договора
     * 
     * @var string
     */
     public $Date = null;

    /**
     * Дата начала действия договора
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Планируемая дата окончания действия договора
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Предмет договора
     * 
     * @var string
     */
     public $ContractObject = null;

    /**
     * Комментарий
     * 
     * @var string
     */
     public $Comments = null;

    /**
     * Размер платы за предоставление в пользование части общего имущества собственников помещений в МКД в месяц
     * 
     * @var string
     */
     public $Payment = null;

    /**
     * Направление расходования средств, внесенных за пользование частью общего имущества
     * 
     * @var string
     */
     public $MoneySpentDirection = null;

    /**
     * Документы договора (Договор/дополнительные соглашения)
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ContractAttachment = [];

    /**
     * Протокол собрания собственников  
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument[]
     */
     public $RentAgrConfirmationDocument = [];

    /**
     * Сведения о внесении платы и задолженности по такой плате
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment[]
     */
     public $AgreementPayment = [];

    /**
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $Organization Организация
     * @param \gisgkh\types\IndividualRegistryBase\IndType $Entrepreneur Физическое лицо
     * @param string $FIASHouseGuid Адрес. Глобальный уникальный идентификатор дома по ФИАС
     * @param string $ContractNumber Номер договора
     * @param string $Date Дата договора
     * @param string $StartDate Дата начала действия договора
     * @param string $EndDate Планируемая дата окончания действия договора
     * @param string [$ContractObject] Предмет договора
     * @param string [$Comments] Комментарий
     * @param string [$Payment] Размер платы за предоставление в пользование части общего имущества собственников помещений в МКД в месяц
     * @param string [$MoneySpentDirection] Направление расходования средств, внесенных за пользование частью общего имущества
     * @param \gisgkh\types\Base\AttachmentType[] $ContractAttachment Документы договора (Договор/дополнительные соглашения)
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument[] $RentAgrConfirmationDocument Протокол собрания собственников  
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment[] [$AgreementPayment] Сведения о внесении платы и задолженности по такой плате
     */
    public function __construct(\gisgkh\types\OrganizationsRegistryBase\RegOrgType $Organization = null, \gisgkh\types\IndividualRegistryBase\IndType $Entrepreneur = null, string $FIASHouseGuid = null, string $ContractNumber = null, string $Date = null, string $StartDate = null, string $EndDate = null, string $ContractObject = null, string $Comments = null, string $Payment = null, string $MoneySpentDirection = null, array $ContractAttachment = [], array $RentAgrConfirmationDocument = [], array $AgreementPayment = [])
    {
        $this->Organization = $Organization;
        $this->Entrepreneur = $Entrepreneur;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ContractNumber = $ContractNumber;
        $this->Date = $Date;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->ContractObject = $ContractObject;
        $this->Comments = $Comments;
        $this->Payment = $Payment;
        $this->MoneySpentDirection = $MoneySpentDirection;
        $this->ContractAttachment = $ContractAttachment;
        $this->RentAgrConfirmationDocument = $RentAgrConfirmationDocument;
        $this->AgreementPayment = $AgreementPayment;
    }
}