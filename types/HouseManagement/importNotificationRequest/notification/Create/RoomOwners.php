<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification\Create;

/**
 * Собственник помещений в МКД
 */
class RoomOwners
{
    /**
     * Необходимость погашения задолженности
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming
     */
     public $DeptsInforming = null;

    /**
     * Принятие решения о выборе другой кредитной организации
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\OtherOrganizationSelection
     */
     public $OtherOrganizationSelection = null;

    /**
     * Принятие рещшения об открытии нового специального счета
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\AccountOpening
     */
     public $AccountOpening = null;

    /**
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming $DeptsInforming Необходимость погашения задолженности
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\OtherOrganizationSelection $OtherOrganizationSelection Принятие решения о выборе другой кредитной организации
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\AccountOpening $AccountOpening Принятие рещшения об открытии нового специального счета
     */
    public function __construct(\gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\DeptsInforming $DeptsInforming = null, \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\OtherOrganizationSelection $OtherOrganizationSelection = null, \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners\AccountOpening $AccountOpening = null)
    {
        $this->DeptsInforming = $DeptsInforming;
        $this->OtherOrganizationSelection = $OtherOrganizationSelection;
        $this->AccountOpening = $AccountOpening;
    }
}