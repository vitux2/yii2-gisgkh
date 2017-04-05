<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType;

/**
 * Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
 */
class CollectiveDevice
{
    /**
     * Информация о наличии датчиков температуры с указанием их местоположения на узле учета (обязательно для заполнения, если tns:TemperatureSensor = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $TemperatureSensorInformation = null;

    /**
     * Информация о наличии датчиков давления с указанием их местоположения на узле учета (обязательно для заполнения, если tns:PressureSensor = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $PressureSensorInformation = null;

    /**
     * @param string [$TemperatureSensorInformation] Информация о наличии датчиков температуры с указанием их местоположения на узле учета (обязательно для заполнения, если tns:TemperatureSensor = true, в противном случае поле не обрабатывается при импорте)
     * @param string [$PressureSensorInformation] Информация о наличии датчиков давления с указанием их местоположения на узле учета (обязательно для заполнения, если tns:PressureSensor = true, в противном случае поле не обрабатывается при импорте)
     */
    public function __construct(string $TemperatureSensorInformation = null, string $PressureSensorInformation = null)
    {
        $this->TemperatureSensorInformation = $TemperatureSensorInformation;
        $this->PressureSensorInformation = $PressureSensorInformation;
    }
}