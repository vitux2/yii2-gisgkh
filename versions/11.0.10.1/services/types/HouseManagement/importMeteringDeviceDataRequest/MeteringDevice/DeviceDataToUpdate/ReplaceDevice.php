<?php

namespace gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate;

/**
 * Архивация ПУ с заменой на другой ПУ
 */
class ReplaceDevice
{
    /**
     * Дата поверки
     * 
     * @var string
     */
     public $VerificationDate = null;

    /**
     * Замена в рамках плановой поверки
     * 
     * @var string
     */
     public $PlannedVerification = null;

    /**
     * Замена в рамках неплановой поверки - указывается Причина выхода ПУ из строя (НСИ 224). 
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ReasonVerification = null;

    /**
     * Показания по ПУ  (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)
     * 
     * @var \gisgkh\types\MeteringDeviceBase\OneRateMeteringValueType[]
     */
     public $DeviceValueMunicipalResourceNotElectric = [];

    /**
     * Показания по ПУ (электрическая энергия)
     * 
     * @var \gisgkh\types\MeteringDeviceBase\ElectricMeteringValueType
     */
     public $DeviceValueMunicipalResourceElectric = null;

    /**
     * Заменить на существующий (идентификатор версии ПУ в ГИС ЖКХ)
     * 
     * @var string
     */
     public $ReplacingMeteringDeviceVersionGUID = null;

    /**
     * @param string $VerificationDate Дата поверки
     * @param string $PlannedVerification Замена в рамках плановой поверки
     * @param \gisgkh\types\NsiBase\nsiRef $ReasonVerification Замена в рамках неплановой поверки - указывается Причина выхода ПУ из строя (НСИ 224). 
     * @param \gisgkh\types\MeteringDeviceBase\OneRateMeteringValueType[] $DeviceValueMunicipalResourceNotElectric Показания по ПУ  (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)
     * @param \gisgkh\types\MeteringDeviceBase\ElectricMeteringValueType $DeviceValueMunicipalResourceElectric Показания по ПУ (электрическая энергия)
     * @param string $ReplacingMeteringDeviceVersionGUID Заменить на существующий (идентификатор версии ПУ в ГИС ЖКХ)
     */
    public function __construct(string $VerificationDate = null, string $PlannedVerification = null, \gisgkh\types\NsiBase\nsiRef $ReasonVerification = null, array $DeviceValueMunicipalResourceNotElectric = [], \gisgkh\types\MeteringDeviceBase\ElectricMeteringValueType $DeviceValueMunicipalResourceElectric = null, string $ReplacingMeteringDeviceVersionGUID = null)
    {
        $this->VerificationDate = $VerificationDate;
        $this->PlannedVerification = $PlannedVerification;
        $this->ReasonVerification = $ReasonVerification;
        $this->DeviceValueMunicipalResourceNotElectric = $DeviceValueMunicipalResourceNotElectric;
        $this->DeviceValueMunicipalResourceElectric = $DeviceValueMunicipalResourceElectric;
        $this->ReplacingMeteringDeviceVersionGUID = $ReplacingMeteringDeviceVersionGUID;
    }
}