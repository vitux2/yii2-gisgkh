<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType;

/**
 * Сведения о внесении платы и задолженности по такой плате
 */
class AgreementPayment
{
    /**
     * Заполнение сведений о внесении платы
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment
     */
     public $AddAgreementPayment = null;

    /**
     * Аннулирование 
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AnnulAgreementPayment
     */
     public $AnnulAgreementPayment = null;

    /**
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment $AddAgreementPayment Заполнение сведений о внесении платы
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AnnulAgreementPayment $AnnulAgreementPayment Аннулирование 
     */
    public function __construct(\gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment $AddAgreementPayment = null, \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AnnulAgreementPayment $AnnulAgreementPayment = null)
    {
        $this->AddAgreementPayment = $AddAgreementPayment;
        $this->AnnulAgreementPayment = $AnnulAgreementPayment;
    }
}