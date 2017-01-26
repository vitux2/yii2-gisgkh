<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Тип системы теплоснабжения (заполняется для коммунальных ресурсов "Тепловая энергия" и "Горячая вода")
 *
 * @package gisgkh\types\HouseManagement
 */
class HeatingSystemType extends GisgkhType
{
    /**
     * @var string $OpenOrNot Открытая/Закрытая (Opened/Closed)
     */
    public $OpenOrNot = null;

    /**
     * @var string $CentralizedOrNot Централизованная/нецентрализованная (Centralized/Decentralized)
     */
    public $CentralizedOrNot = null;
}