<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Внесение изменений в версию ДУ
 */
class EditContract extends \gisgkh\types\HouseManagement\ContractType
{
    /**
     * Формировать заявки в реестр лицензий, если сведения о лицензии/управляемом объекте отсутсвуют
     * 
     * @var string
     */
     public $LicenseRequest = null;

    /**
     * Управляемый объект
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject[]
     */
     public $ContractObject = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * @param string [$LicenseRequest] Формировать заявки в реестр лицензий, если сведения о лицензии/управляемом объекте отсутсвуют
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract\ContractObject[] [$ContractObject] Управляемый объект
     * @param string $ContractVersionGUID Идентификатор версии договора
     */
    public function __construct(string $LicenseRequest = null, array $ContractObject = null, string $ContractVersionGUID = null)
    {
        $this->LicenseRequest = $LicenseRequest;
        $this->ContractObject = $ContractObject;
        $this->ContractVersionGUID = $ContractVersionGUID;
    }
}