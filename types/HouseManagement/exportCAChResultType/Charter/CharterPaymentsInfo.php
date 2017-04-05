<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Charter;

/**
 * Сведения о размере платы 
 */
class CharterPaymentsInfo extends \gisgkh\types\HouseManagement\CharterPaymentsInfoType
{
    /**
     * Идентификатор версии сведений о размере платы по уставу
     * 
     * @var string
     */
     public $CharterPaymentsInfoVersionGUID = null;

    /**
     * Статус версии:
(P)laced - информация размещена
(A)nnulment - инофрмация аннулирована

     * 
     * @var string
     */
     public $Status = null;

    /**
     * @param string $CharterPaymentsInfoVersionGUID Идентификатор версии сведений о размере платы по уставу
     * @param string $Status Статус версии:
(P)laced - информация размещена
(A)nnulment - инофрмация аннулирована

     */
    public function __construct(string $CharterPaymentsInfoVersionGUID = null, string $Status = null)
    {
        $this->CharterPaymentsInfoVersionGUID = $CharterPaymentsInfoVersionGUID;
        $this->Status = $Status;
    }
}