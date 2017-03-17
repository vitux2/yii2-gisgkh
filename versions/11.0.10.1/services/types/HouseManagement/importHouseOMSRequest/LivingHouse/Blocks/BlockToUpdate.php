<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse\Blocks;

/**
 * Обновление блока
 */
class BlockToUpdate extends \gisgkh\types\HouseManagement\BlockUpdateOMSType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор комнаты
     * 
     * @var string
     */
     public $BlockGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $BlockGUID Идентификатор комнаты
     */
    public function __construct(string $TransportGUID = null, string $BlockGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->BlockGUID = $BlockGUID;
    }
}