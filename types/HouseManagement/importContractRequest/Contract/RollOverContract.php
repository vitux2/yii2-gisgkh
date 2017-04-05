<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Пролонгация ДУ
 */
class RollOverContract extends \gisgkh\types\HouseManagement\RollOverType
{
    /**
     * Формировать заявки в реестр лицензий, если новые периоды домов не совпадают с периодами действия существующих лицензий. Срок управления для каждого МКД увеличивается автоматически на количество дней первого интервала управления МКД.
     * 
     * @var string
     */
     public $LicenseRequest = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * @param string [$LicenseRequest] Формировать заявки в реестр лицензий, если новые периоды домов не совпадают с периодами действия существующих лицензий. Срок управления для каждого МКД увеличивается автоматически на количество дней первого интервала управления МКД.
     * @param string $ContractVersionGUID Идентификатор версии договора
     */
    public function __construct(string $LicenseRequest = null, string $ContractVersionGUID = null)
    {
        $this->LicenseRequest = $LicenseRequest;
        $this->ContractVersionGUID = $ContractVersionGUID;
    }
}