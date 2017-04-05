<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип для создания ПУ, редактирования ПУ до начала внесения показаний, а также для экспорта сведений о ПУ
 */
class MeteringDeviceFullInformationType
{
    /**
     * Основные характеристики
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType
     */
     public $BasicChatacteristicts = null;

    /**
     * Объем ресурса(ов) определяется только с помощью текущего ПУ (связей с другими ПУ нет)
     * 
     * @var string
     */
     public $NotLinkedWithMetering = null;

    /**
     * Объем ресурса(ов) определяется с помощью нескольких приборов учета
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType\LinkedWithMetering
     */
     public $LinkedWithMetering = null;

    /**
     * Сведения о коммунальном ресурсе и базовые показания ПУ  (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)
     * 
     * @var \gisgkh\types\HouseManagement\MunicipalResourceNotElectricType[]
     */
     public $MunicipalResourceNotEnergy = null;

    /**
     * Сведения о коммунальном ресурсе и базовые показания ПУ (электрическая энергия)
     * 
     * @var \gisgkh\types\HouseManagement\MunicipalResourceElectricType
     */
     public $MunicipalResourceEnergy = null;

    /**
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType $BasicChatacteristicts Основные характеристики
     * @param string $NotLinkedWithMetering Объем ресурса(ов) определяется только с помощью текущего ПУ (связей с другими ПУ нет)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType\LinkedWithMetering $LinkedWithMetering Объем ресурса(ов) определяется с помощью нескольких приборов учета
     * @param \gisgkh\types\HouseManagement\MunicipalResourceNotElectricType[] $MunicipalResourceNotEnergy Сведения о коммунальном ресурсе и базовые показания ПУ  (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)
     * @param \gisgkh\types\HouseManagement\MunicipalResourceElectricType $MunicipalResourceEnergy Сведения о коммунальном ресурсе и базовые показания ПУ (электрическая энергия)
     */
    public function __construct(\gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType $BasicChatacteristicts = null, string $NotLinkedWithMetering = null, \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType\LinkedWithMetering $LinkedWithMetering = null, array $MunicipalResourceNotEnergy = null, \gisgkh\types\HouseManagement\MunicipalResourceElectricType $MunicipalResourceEnergy = null)
    {
        $this->BasicChatacteristicts = $BasicChatacteristicts;
        $this->NotLinkedWithMetering = $NotLinkedWithMetering;
        $this->LinkedWithMetering = $LinkedWithMetering;
        $this->MunicipalResourceNotEnergy = $MunicipalResourceNotEnergy;
        $this->MunicipalResourceEnergy = $MunicipalResourceEnergy;
    }
}