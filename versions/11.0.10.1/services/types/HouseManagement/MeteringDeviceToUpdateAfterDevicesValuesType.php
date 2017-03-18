<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип для редактирования ПУ после начала внесения показаний
 */
class MeteringDeviceToUpdateAfterDevicesValuesType
{
    /**
     * Дата установки
     * 
     * @var string
     */
     public $InstallationDate = null;

    /**
     * Наличие возможности дистанционного снятия показаний
     * 
     * @var string
     */
     public $RemoteMeteringMode = null;

    /**
     * Информация о наличии возможности дистанционного снятия показаний ПУ указанием наименования установленной системы (обязательно для заполнения, если tns:RemoteMeteringMode = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $RemoteMeteringInfo = null;

    /**
     * Наличие датчиков температры
     * 
     * @var string
     */
     public $TemperatureSensor = null;

    /**
     * Наличие датчиков давления
     * 
     * @var string
     */
     public $PressureSensor = null;

    /**
     * Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\CollectiveDevice
     */
     public $CollectiveDevice = null;

    /**
     * В случае изменения лицевых счетов необходимо прислать их актуальный перечень (данные будут полностью заменены)
     * 
     * @var string[]
     */
     public $AccountGUID = null;

    /**
     * Данные об изменении базовых показаний. Коммунальный ресурс (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды) должен быть указан тот же, что и при создании ПУ
     * 
     * @var \gisgkh\types\HouseManagement\MunicipalResourceNotElectricType[]
     */
     public $MunicipalResourceNotEnergy = null;

    /**
     * Данные об изменении базовых показаний ПУ электрической энергии. Необходимо прислать все актуальные базовые показания в соответсвии с видом ПУ по количеству тарифов (даже если отредактировать надо только одно показание).
     * 
     * @var \gisgkh\types\HouseManagement\MunicipalResourceElectricType
     */
     public $MunicipalResourceEnergy = null;

    /**
     * Дата последней поверки (поле можно редактировать после начала внесения показаний, но запрещено к редактированию после внесения первой поверки)
     * 
     * @var string
     */
     public $FirstVerificationDate = null;

    /**
     * Объем ресурса(ов) определяется только с помощью текущего ПУ (связей с другими ПУ нет)
     * 
     * @var string
     */
     public $NotLinkedWithMetering = null;

    /**
     * Объем ресурса(ов) определяется с помощью нескольких приборов учета
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\LinkedWithMetering
     */
     public $LinkedWithMetering = null;

    /**
     * @param string [$InstallationDate] Дата установки
     * @param string [$RemoteMeteringMode] Наличие возможности дистанционного снятия показаний
     * @param string [$RemoteMeteringInfo] Информация о наличии возможности дистанционного снятия показаний ПУ указанием наименования установленной системы (обязательно для заполнения, если tns:RemoteMeteringMode = true, в противном случае поле не обрабатывается при импорте)
     * @param string [$TemperatureSensor] Наличие датчиков температры
     * @param string [$PressureSensor] Наличие датчиков давления
     * @param \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\CollectiveDevice [$CollectiveDevice] Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
     * @param string[] [$AccountGUID] В случае изменения лицевых счетов необходимо прислать их актуальный перечень (данные будут полностью заменены)
     * @param \gisgkh\types\HouseManagement\MunicipalResourceNotElectricType[] $MunicipalResourceNotEnergy Данные об изменении базовых показаний. Коммунальный ресурс (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды) должен быть указан тот же, что и при создании ПУ
     * @param \gisgkh\types\HouseManagement\MunicipalResourceElectricType $MunicipalResourceEnergy Данные об изменении базовых показаний ПУ электрической энергии. Необходимо прислать все актуальные базовые показания в соответсвии с видом ПУ по количеству тарифов (даже если отредактировать надо только одно показание).
     * @param string [$FirstVerificationDate] Дата последней поверки (поле можно редактировать после начала внесения показаний, но запрещено к редактированию после внесения первой поверки)
     * @param string $NotLinkedWithMetering Объем ресурса(ов) определяется только с помощью текущего ПУ (связей с другими ПУ нет)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\LinkedWithMetering $LinkedWithMetering Объем ресурса(ов) определяется с помощью нескольких приборов учета
     */
    public function __construct(string $InstallationDate = null, string $RemoteMeteringMode = null, string $RemoteMeteringInfo = null, string $TemperatureSensor = null, string $PressureSensor = null, \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\CollectiveDevice $CollectiveDevice = null, array $AccountGUID = null, array $MunicipalResourceNotEnergy = null, \gisgkh\types\HouseManagement\MunicipalResourceElectricType $MunicipalResourceEnergy = null, string $FirstVerificationDate = null, string $NotLinkedWithMetering = null, \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType\LinkedWithMetering $LinkedWithMetering = null)
    {
        $this->InstallationDate = $InstallationDate;
        $this->RemoteMeteringMode = $RemoteMeteringMode;
        $this->RemoteMeteringInfo = $RemoteMeteringInfo;
        $this->TemperatureSensor = $TemperatureSensor;
        $this->PressureSensor = $PressureSensor;
        $this->CollectiveDevice = $CollectiveDevice;
        $this->AccountGUID = $AccountGUID;
        $this->MunicipalResourceNotEnergy = $MunicipalResourceNotEnergy;
        $this->MunicipalResourceEnergy = $MunicipalResourceEnergy;
        $this->FirstVerificationDate = $FirstVerificationDate;
        $this->NotLinkedWithMetering = $NotLinkedWithMetering;
        $this->LinkedWithMetering = $LinkedWithMetering;
    }
}