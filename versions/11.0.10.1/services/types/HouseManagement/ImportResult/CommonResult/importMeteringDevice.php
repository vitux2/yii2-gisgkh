<?php

namespace gisgkh\types\HouseManagement\ImportResult\CommonResult;

/**
 * Заполняется для операции importMeteringDevice 
 */
class importMeteringDevice
{
    /**
     * Идентификатор ПУ
     * 
     * @var string
     */
     public $MeteringDeviceGUID = null;

    /**
     * @param string $MeteringDeviceGUID Идентификатор ПУ
     */
    public function __construct(string $MeteringDeviceGUID = null)
    {
        $this->MeteringDeviceGUID = $MeteringDeviceGUID;
    }
}