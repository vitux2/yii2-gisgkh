<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Создание ДУ 
 */
class PlacingContract extends \gisgkh\types\HouseManagement\ContractType
{
    /**
     * Формировать заявки в реестр лицензий, если сведения о лицензии/управляемом объекте отсутсвуют
     * 
     * @var string
     */
     public $LicenseRequest = null;

    /**
     * Объект управления
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject[]
     */
     public $ContractObject = [];

    /**
     * @param string [$LicenseRequest] Формировать заявки в реестр лицензий, если сведения о лицензии/управляемом объекте отсутсвуют
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract\ContractObject[] $ContractObject Объект управления
     */
    public function __construct(string $LicenseRequest = null, array $ContractObject = [])
    {
        $this->LicenseRequest = $LicenseRequest;
        $this->ContractObject = $ContractObject;
    }
}