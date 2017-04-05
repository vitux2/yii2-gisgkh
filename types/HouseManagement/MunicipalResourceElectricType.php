<?php

namespace gisgkh\types\HouseManagement;

/**
 * Сведения о коммунальном ресурсе и базовые показания (электрическая энергия). В зависимости от количества заданных при создании базовых значений ПУ определяется его вид по количеству тарифов.
 */
class MunicipalResourceElectricType extends \gisgkh\types\MeteringDeviceBase\ElectricMeteringValueType
{
    /**
     * Кэффициент трансформации
     * 
     * @var string
     */
     public $TransformationRatio = null;

    /**
     * @param string [$TransformationRatio] Кэффициент трансформации
     */
    public function __construct(string $TransformationRatio = null)
    {
        $this->TransformationRatio = $TransformationRatio;
    }
}