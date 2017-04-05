<?php

namespace gisgkh\types\MeteringDeviceBase;

/**
 * Показания по ПУ электрической энергии
 */
class ElectricMeteringValueType
{
    /**
     * Показания по тарифу T1
     * 
     * @var string
     */
     public $MeteringValueT1 = null;

    /**
     * Показания по тарифу T2
     * 
     * @var string
     */
     public $MeteringValueT2 = null;

    /**
     * Показания по тарифу T3
     * 
     * @var string
     */
     public $MeteringValueT3 = null;

    /**
     * Кем внесено (заполняется только при экспорте)
     * 
     * @var string
     */
     public $ReadingsSource = null;

    /**
     * @param string $MeteringValueT1 Показания по тарифу T1
     * @param string [$MeteringValueT2] Показания по тарифу T2
     * @param string [$MeteringValueT3] Показания по тарифу T3
     * @param string [$ReadingsSource] Кем внесено (заполняется только при экспорте)
     */
    public function __construct(string $MeteringValueT1 = null, string $MeteringValueT2 = null, string $MeteringValueT3 = null, string $ReadingsSource = null)
    {
        $this->MeteringValueT1 = $MeteringValueT1;
        $this->MeteringValueT2 = $MeteringValueT2;
        $this->MeteringValueT3 = $MeteringValueT3;
        $this->ReadingsSource = $ReadingsSource;
    }
}