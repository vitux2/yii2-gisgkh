<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт лицевых счетов
 */
class exportAccountRequest extends \gisgkh\types\Base\BaseType
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
    public $version = "10.0.1.1";

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $FIASHouseGuid = null, $version = "10.0.1.1")
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->version = $version;
    }
}