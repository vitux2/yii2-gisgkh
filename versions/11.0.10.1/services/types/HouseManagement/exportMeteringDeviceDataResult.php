<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на экспорт ПУ
 */
class exportMeteringDeviceDataResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Характеристика ПУ
     * 
     * @var \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType[]
     */
     public $MeteringDevice = null;

    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType[] [$MeteringDevice] Характеристика ПУ
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $MeteringDevice = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "11.0.0.1")
    {
        $this->MeteringDevice = $MeteringDevice;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}