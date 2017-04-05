<?php

namespace gisgkh\types\HouseManagement;

/**
 * Предмет договора
 */
class ContractSubjectType
{
    /**
     * Вид КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * 
     * @var \gisgkh\types\HouseManagement\ContractSubjectType\ServiceType
     */
     public $ServiceType = null;

    /**
     * Коммунальный ресурс. Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     * 
     * @var \gisgkh\types\HouseManagement\ContractSubjectType\MunicipalResource
     */
     public $MunicipalResource = null;

    /**
     * Дата начала поставки ресурса
     * 
     * @var string
     */
     public $StartSupplyDate = null;

    /**
     * Дата окончания поставки ресурса
     * 
     * @var string
     */
     public $EndSupplyDate = null;

    /**
     * Плановый объем и режим подачи за год
     * 
     * @var \gisgkh\types\HouseManagement\ContractSubjectType\PlannedVolume
     */
     public $PlannedVolume = null;

    /**
     * @param \gisgkh\types\HouseManagement\ContractSubjectType\ServiceType $ServiceType Вид КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * @param \gisgkh\types\HouseManagement\ContractSubjectType\MunicipalResource $MunicipalResource Коммунальный ресурс. Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     * @param string $StartSupplyDate Дата начала поставки ресурса
     * @param string $EndSupplyDate Дата окончания поставки ресурса
     * @param \gisgkh\types\HouseManagement\ContractSubjectType\PlannedVolume [$PlannedVolume] Плановый объем и режим подачи за год
     */
    public function __construct(\gisgkh\types\HouseManagement\ContractSubjectType\ServiceType $ServiceType = null, \gisgkh\types\HouseManagement\ContractSubjectType\MunicipalResource $MunicipalResource = null, string $StartSupplyDate = null, string $EndSupplyDate = null, \gisgkh\types\HouseManagement\ContractSubjectType\PlannedVolume $PlannedVolume = null)
    {
        $this->ServiceType = $ServiceType;
        $this->MunicipalResource = $MunicipalResource;
        $this->StartSupplyDate = $StartSupplyDate;
        $this->EndSupplyDate = $EndSupplyDate;
        $this->PlannedVolume = $PlannedVolume;
    }
}