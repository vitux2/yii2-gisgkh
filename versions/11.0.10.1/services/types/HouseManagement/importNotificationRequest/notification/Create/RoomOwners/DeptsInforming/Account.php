<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming;

/**
 * Лицевой счет
 */
class Account
{
    /**
     * Сумма задолженности
     * 
     * @var string
     */
     public $TotalDebt = null;

    /**
     * Единый лицевой счет
     * 
     * @var string
     */
     public $UnifiedAccountNumber = null;

    /**
     * @param string $TotalDebt Сумма задолженности
     * @param string $UnifiedAccountNumber Единый лицевой счет
     */
    public function __construct(string $TotalDebt = null, string $UnifiedAccountNumber = null)
    {
        $this->TotalDebt = $TotalDebt;
        $this->UnifiedAccountNumber = $UnifiedAccountNumber;
    }
}