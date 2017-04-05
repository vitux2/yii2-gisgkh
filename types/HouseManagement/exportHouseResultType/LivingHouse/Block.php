<?php

namespace gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse;

/**
 * Блоки (для жилого дома блокированной застройки)
 */
class Block extends \gisgkh\types\HouseManagement\BlockExportType
{
    /**
     * Уникальный номер блока
     * 
     * @var string
     */
     public $BlockUniqueNumber = null;

    /**
     * Дата модификации данных блока
     * 
     * @var string
     */
     public $ModificationDate = null;

    /**
     * Идентификатор блока
     * 
     * @var string
     */
     public $BlockGUID = null;

    /**
     * Комната в блоке
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\Block\LivingRoom[]
     */
     public $LivingRoom = null;

    /**
     * @param string $BlockUniqueNumber Уникальный номер блока
     * @param string $ModificationDate Дата модификации данных блока
     * @param string $BlockGUID Идентификатор блока
     * @param \gisgkh\types\HouseManagement\exportHouseResultType\LivingHouse\Block\LivingRoom[] [$LivingRoom] Комната в блоке
     */
    public function __construct(string $BlockUniqueNumber = null, string $ModificationDate = null, string $BlockGUID = null, array $LivingRoom = null)
    {
        $this->BlockUniqueNumber = $BlockUniqueNumber;
        $this->ModificationDate = $ModificationDate;
        $this->BlockGUID = $BlockGUID;
        $this->LivingRoom = $LivingRoom;
    }
}