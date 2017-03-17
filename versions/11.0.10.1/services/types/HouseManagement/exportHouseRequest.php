<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт данных дома
 */
class exportHouseRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.10.1";

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $FIASHouseGuid = null, $version = "11.0.10.1")
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->version = $version;
    }
}