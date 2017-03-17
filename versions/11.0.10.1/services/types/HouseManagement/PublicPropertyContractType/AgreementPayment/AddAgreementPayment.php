<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment;

/**
 * Заполнение сведений о внесении платы
 */
class AddAgreementPayment
{
    /**
     * Идентификатор версии сведений о внесении платы в ГИС ЖКХ
     * 
     * @var string
     */
     public $AgreementPaymentVersionGUID = null;

    /**
     * Период
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment\DatePeriod
     */
     public $DatePeriod = null;

    /**
     * Начислено за период
     * 
     * @var string
     */
     public $Bill = null;

    /**
     * Размер задолженности (-)/переплаты (+) за период
     * 
     * @var string
     */
     public $Debt = null;

    /**
     * Оплачено за период
     * 
     * @var string
     */
     public $Paid = null;

    /**
     * @param string [$AgreementPaymentVersionGUID] Идентификатор версии сведений о внесении платы в ГИС ЖКХ
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment\DatePeriod $DatePeriod Период
     * @param string $Bill Начислено за период
     * @param string $Debt Размер задолженности (-)/переплаты (+) за период
     * @param string $Paid Оплачено за период
     */
    public function __construct(string $AgreementPaymentVersionGUID = null, \gisgkh\types\HouseManagement\PublicPropertyContractType\AgreementPayment\AddAgreementPayment\DatePeriod $DatePeriod = null, string $Bill = null, string $Debt = null, string $Paid = null)
    {
        $this->AgreementPaymentVersionGUID = $AgreementPaymentVersionGUID;
        $this->DatePeriod = $DatePeriod;
        $this->Bill = $Bill;
        $this->Debt = $Debt;
        $this->Paid = $Paid;
    }
}