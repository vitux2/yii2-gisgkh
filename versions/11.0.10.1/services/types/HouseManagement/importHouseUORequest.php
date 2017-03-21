<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт данных дома. В ответ на запрос формируется статус обработки данных многоквартирного дома. ImportResult содержит результат обработки данных дома (В CRUDGUID содержится FIASHouseGuid входных данных, UniqueNumber содержит Уникальный номер дома), помещений (UniqueNumber собержит Уникальный номер помещения), комнат (UniqueNumber собержит Уникальный номер комнаты).
 */
class importHouseUORequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Многоквартирный дом
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse
     */
     public $ApartmentHouse = null;

    /**
     * Жилой дом
     * 
     * @var \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse
     */
     public $LivingHouse = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.10.1";

    /**
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse $ApartmentHouse Многоквартирный дом
     * @param \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse $LivingHouse Жилой дом
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\HouseManagement\importHouseUORequest\ApartmentHouse $ApartmentHouse = null, \gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse $LivingHouse = null, $version = "11.0.10.1")
    {
        $this->ApartmentHouse = $ApartmentHouse;
        $this->LivingHouse = $LivingHouse;
        $this->version = $version;
    }
}