<?php

namespace gisgkh\types\HouseManagement\importHouseUORequest\LivingHouse\Blocks;

/**
 * Создание блока
 */
class BlockToCreate extends \gisgkh\types\HouseManagement\BlockUOType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     */
    public function __construct(string $TransportGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
    }
}