<?php

namespace gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract;

/**
 * Создание\изменение ДОГПОИ
 */
class PublicPropertyContract extends \gisgkh\types\HouseManagement\PublicPropertyContractType
{
    /**
     * Период внесения платы по договору о предоставлении в пользование части общего имущества собственников помещений в многоквартирном доме
     * 
     * @var \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract\PaymentInterval
     */
     public $PaymentInterval = null;

    /**
     * @param \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract\PaymentInterval $PaymentInterval Период внесения платы по договору о предоставлении в пользование части общего имущества собственников помещений в многоквартирном доме
     */
    public function __construct(\gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract\PaymentInterval $PaymentInterval = null)
    {
        $this->PaymentInterval = $PaymentInterval;
    }
}