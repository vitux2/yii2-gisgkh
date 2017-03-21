<?php

namespace gisgkh\types\MeteringDeviceBase;

/**
 * Показания по ПУ тепловой энергии, газа, горячей воды, холодной воды, сточных бытовых вод
 */
class OneRateMeteringValueType
{
    /**
     * Коммунальный ресурс (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)  (НСИ 2)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $MunicipalResource = null;

    /**
     * Значение
     * 
     * @var string
     */
     public $MeteringValue = null;

    /**
     * Кем внесено (заполняется только при экспорте)
     * 
     * @var string
     */
     public $ReadingsSource = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $MunicipalResource Коммунальный ресурс (тепловая энергия, газ, горячая вода, холодная вода, сточные бытовые воды)  (НСИ 2)
     * @param string $MeteringValue Значение
     * @param string [$ReadingsSource] Кем внесено (заполняется только при экспорте)
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $MunicipalResource = null, string $MeteringValue = null, string $ReadingsSource = null)
    {
        $this->MunicipalResource = $MunicipalResource;
        $this->MeteringValue = $MeteringValue;
        $this->ReadingsSource = $ReadingsSource;
    }
}