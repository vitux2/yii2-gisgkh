<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners;

/**
 * Необходимость погашения задолженности
 */
class DeptsInforming
{
    /**
     * Лицевой счет
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming\Account[]
     */
     public $Account = null;

    /**
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming\Account[] $Account Лицевой счет
     */
    public function __construct(array $Account = null)
    {
        $this->Account = $Account;
    }
}