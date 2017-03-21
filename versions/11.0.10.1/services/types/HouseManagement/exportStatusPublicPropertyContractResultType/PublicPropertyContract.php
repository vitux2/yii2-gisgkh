<?php

namespace gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType;

/**
 * ДОИ
 */
class PublicPropertyContract extends \gisgkh\types\HouseManagement\PublicPropertyContractType
{
    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Состояние договора
     * 
     * @var string
     */
     public $StatusContract = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Номер версии 
     * 
     * @var string
     */
     public $VersionNumber = null;

    /**
     * Статус версии 
     * 
     * @var string
     */
     public $StatusVersion = null;

    /**
     * Период внесения платы по договору о предоставлении в пользование части общего имущества собственников помещений в многоквартирном доме
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract\PaymentInterval
     */
     public $PaymentInterval = null;

    /**
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $StatusContract Состояние договора
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param string $VersionNumber Номер версии 
     * @param string $StatusVersion Статус версии 
     * @param \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract\PaymentInterval [$PaymentInterval] Период внесения платы по договору о предоставлении в пользование части общего имущества собственников помещений в многоквартирном доме
     */
    public function __construct(string $ContractGUID = null, string $StatusContract = null, string $ContractVersionGUID = null, string $VersionNumber = null, string $StatusVersion = null, \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract\PaymentInterval $PaymentInterval = null)
    {
        $this->ContractGUID = $ContractGUID;
        $this->StatusContract = $StatusContract;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->VersionNumber = $VersionNumber;
        $this->StatusVersion = $StatusVersion;
        $this->PaymentInterval = $PaymentInterval;
    }
}