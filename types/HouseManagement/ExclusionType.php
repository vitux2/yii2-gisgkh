<?php

namespace gisgkh\types\HouseManagement;

/**
 * Сведения об исключении объекта управления из ДУ/Устава
 */
class ExclusionType
{
    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceType
     */
     public $BaseExclusion = null;

    /**
     * Дата исключения
     * 
     * @var string
     */
     public $DateExclusion = null;

    /**
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseExclusion Основание
     * @param string $DateExclusion Дата исключения
     */
    public function __construct(\gisgkh\types\HouseManagement\BaseServiceType $BaseExclusion = null, string $DateExclusion = null)
    {
        $this->BaseExclusion = $BaseExclusion;
        $this->DateExclusion = $DateExclusion;
    }
}