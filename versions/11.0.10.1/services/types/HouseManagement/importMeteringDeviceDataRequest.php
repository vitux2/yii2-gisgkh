<?php

namespace gisgkh\types\HouseManagement;

/**
 * Передать данные приборов учета
(Создание ПУ или обновление данных о ПУ (в том числе замена ПУ, архивация ПУ))
 */
class importMeteringDeviceDataRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Приборы учета
     * 
     * @var \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice[]
     */
     public $MeteringDevice = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param \gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice[] $MeteringDevice Приборы учета
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $FIASHouseGuid = null, array $MeteringDevice = null, $version = "11.0.0.1")
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->MeteringDevice = $MeteringDevice;
        $this->version = $version;
    }
}