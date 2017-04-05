<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Предмет договора
 */
class ContractSubject
{
    /**
     * Вид КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\ServiceType
     */
     public $ServiceType = null;

    /**
     * Коммунальный ресурс. Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\MunicipalResource
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
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\PlannedVolume
     */
     public $PlannedVolume = null;

    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\ServiceType $ServiceType Вид КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3) 
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\MunicipalResource $MunicipalResource Коммунальный ресурс. Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     * @param string $StartSupplyDate Дата начала поставки ресурса
     * @param string $EndSupplyDate Дата окончания поставки ресурса
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\PlannedVolume [$PlannedVolume] Плановый объем и режим подачи за год
     * @param string $TransportGUID Транспортный идентификатор
     */
    public function __construct(\gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\ServiceType $ServiceType = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\MunicipalResource $MunicipalResource = null, string $StartSupplyDate = null, string $EndSupplyDate = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject\PlannedVolume $PlannedVolume = null, string $TransportGUID = null)
    {
        $this->ServiceType = $ServiceType;
        $this->MunicipalResource = $MunicipalResource;
        $this->StartSupplyDate = $StartSupplyDate;
        $this->EndSupplyDate = $EndSupplyDate;
        $this->PlannedVolume = $PlannedVolume;
        $this->TransportGUID = $TransportGUID;
    }
}