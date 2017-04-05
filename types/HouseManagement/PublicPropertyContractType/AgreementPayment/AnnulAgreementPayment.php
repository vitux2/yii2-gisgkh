<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment;

/**
 * Аннулирование 
 */
class AnnulAgreementPayment extends \gisgkh\types\HouseManagement\AnnulmentType
{
    /**
     * Идентификатор версии сведений о внесении платы в ГИС ЖКХ
     * 
     * @var string
     */
     public $AgreementPaymentVersionGUID = null;

    /**
     * @param string $AgreementPaymentVersionGUID Идентификатор версии сведений о внесении платы в ГИС ЖКХ
     */
    public function __construct(string $AgreementPaymentVersionGUID = null)
    {
        $this->AgreementPaymentVersionGUID = $AgreementPaymentVersionGUID;
    }
}