<?php

namespace gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;

/**
 * Предмет договора
 */
class ContractSubject
{
    /**
     * Предмет договора 
Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * 
     * @var \gisgkh\types\HouseManagement\exportSupplyResourceContractRequest\ContractSubject\ServiceType
     */
     public $ServiceType = null;

    /**
     * Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $MunicipalResource = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportSupplyResourceContractRequest\ContractSubject\ServiceType $ServiceType Предмет договора 
Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * @param \gisgkh\types\NsiBase\nsiRef $MunicipalResource Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     */
    public function __construct(\gisgkh\types\HouseManagement\exportSupplyResourceContractRequest\ContractSubject\ServiceType $ServiceType = null, \gisgkh\types\NsiBase\nsiRef $MunicipalResource = null)
    {
        $this->ServiceType = $ServiceType;
        $this->MunicipalResource = $MunicipalResource;
    }
}