<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Contract;

/**
 * Сведения о размере платы 
 */
class ContractPaymentsInfo extends \gisgkh\types\HouseManagement\ContractPaymentsInfoType
{
    /**
     * Идентификатор версии сведений о размере платы по ДУ
     * 
     * @var string
     */
     public $ContractPaymentsInfoVersionGUID = null;

    /**
     * Статус версии:
(P)laced - информация размещена
(A)nnulment - инофрмация аннулирована

     * 
     * @var string
     */
     public $Status = null;

    /**
     * @param string $ContractPaymentsInfoVersionGUID Идентификатор версии сведений о размере платы по ДУ
     * @param string $Status Статус версии:
(P)laced - информация размещена
(A)nnulment - инофрмация аннулирована

     */
    public function __construct(string $ContractPaymentsInfoVersionGUID = null, string $Status = null)
    {
        $this->ContractPaymentsInfoVersionGUID = $ContractPaymentsInfoVersionGUID;
        $this->Status = $Status;
    }
}