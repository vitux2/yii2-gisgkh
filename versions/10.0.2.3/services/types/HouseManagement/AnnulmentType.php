<?php

namespace gisgkh\types\HouseManagement;
use gisgkh\types\GisgkhType;

/**
 * Аннулирование сведений
 *
 * @package gisgkh\types\HouseManagement
 */
class AnnulmentType extends GisgkhType
{
    /**
     * @var string $ReasonOfAnnulment Причина аннулировани, макс. 1000 символов
     */
    public $ReasonOfAnnulment = null;
}