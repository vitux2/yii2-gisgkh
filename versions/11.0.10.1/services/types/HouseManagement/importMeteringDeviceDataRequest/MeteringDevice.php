<?php

namespace gisgkh\types\HouseManagement\importMeteringDeviceDataRequest;

/**
 * Приборы учета
 */
class MeteringDevice
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Данные ПУ для добавления  в ГИС ЖКХ
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType
     */
     public $DeviceDataToCreate = null;

    /**
     * Изменение существующего в ГИС ЖКХ ПУ  (в том числе замена ПУ, архивация ПУ)
     * 
     * @var \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate
     */
     public $DeviceDataToUpdate = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType $DeviceDataToCreate Данные ПУ для добавления  в ГИС ЖКХ
     * @param \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate $DeviceDataToUpdate Изменение существующего в ГИС ЖКХ ПУ  (в том числе замена ПУ, архивация ПУ)
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType $DeviceDataToCreate = null, \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate $DeviceDataToUpdate = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->DeviceDataToCreate = $DeviceDataToCreate;
        $this->DeviceDataToUpdate = $DeviceDataToUpdate;
    }
}