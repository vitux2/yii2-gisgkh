<?php

namespace gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice;

/**
 * Изменение существующего в ГИС ЖКХ ПУ  (в том числе замена ПУ, архивация ПУ)
 */
class DeviceDataToUpdate
{
    /**
     * Идентификатор версии ПУ (для обновления данных)
     * 
     * @var string
     */
     public $MeteringDeviceVersionGUID = null;

    /**
     * Обновление характеристик ПУ до начала внесения показаний. Необходимо прислать  все актуальные сведения по ПУ
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType
     */
     public $UpdateBeforeDevicesValues = null;

    /**
     * Обновление характеристик ПУ после начала внесения показаний
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType
     */
     public $UpdateAfterDevicesValues = null;

    /**
     * Связать ПУ с другими заведенными в ГИС ЖКХ ПУ. Операция возможна только, если для текущего ПУ установлен признак "Объем ресурса(ов) определяется с помощью нескольких приборов учета". Необходимо присылать актуальную коллекцию связанных ПУ
     * 
     * @var \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\LinkedWithMetering
     */
     public $LinkedWithMetering = null;

    /**
     * Архивация ПУ без замены на другой ПУ
     * 
     * @var \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ArchiveDevice
     */
     public $ArchiveDevice = null;

    /**
     * Архивация ПУ с заменой на другой ПУ
     * 
     * @var \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ReplaceDevice
     */
     public $ReplaceDevice = null;

    /**
     * @param string $MeteringDeviceVersionGUID Идентификатор версии ПУ (для обновления данных)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType $UpdateBeforeDevicesValues Обновление характеристик ПУ до начала внесения показаний. Необходимо прислать  все актуальные сведения по ПУ
     * @param \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType $UpdateAfterDevicesValues Обновление характеристик ПУ после начала внесения показаний
     * @param \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\LinkedWithMetering $LinkedWithMetering Связать ПУ с другими заведенными в ГИС ЖКХ ПУ. Операция возможна только, если для текущего ПУ установлен признак "Объем ресурса(ов) определяется с помощью нескольких приборов учета". Необходимо присылать актуальную коллекцию связанных ПУ
     * @param \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ArchiveDevice $ArchiveDevice Архивация ПУ без замены на другой ПУ
     * @param \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ReplaceDevice $ReplaceDevice Архивация ПУ с заменой на другой ПУ
     */
    public function __construct(string $MeteringDeviceVersionGUID = null, \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType $UpdateBeforeDevicesValues = null, \gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType $UpdateAfterDevicesValues = null, \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\LinkedWithMetering $LinkedWithMetering = null, \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ArchiveDevice $ArchiveDevice = null, \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate\ReplaceDevice $ReplaceDevice = null)
    {
        $this->MeteringDeviceVersionGUID = $MeteringDeviceVersionGUID;
        $this->UpdateBeforeDevicesValues = $UpdateBeforeDevicesValues;
        $this->UpdateAfterDevicesValues = $UpdateAfterDevicesValues;
        $this->LinkedWithMetering = $LinkedWithMetering;
        $this->ArchiveDevice = $ArchiveDevice;
        $this->ReplaceDevice = $ReplaceDevice;
    }
}