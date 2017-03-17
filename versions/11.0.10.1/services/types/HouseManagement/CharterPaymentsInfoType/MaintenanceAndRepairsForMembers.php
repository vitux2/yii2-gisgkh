<?php

namespace gisgkh\types\HouseManagement\CharterPaymentsInfoType;

/**
 * Информация о размере обязательных платежей и (или) взносов членов товарищества, кооператива,
связанных с оплатой расходов на содержание и текущий ремонт общего имущества в МКД
 */
class MaintenanceAndRepairsForMembers
{
    /**
     * Размер обязательных платежей и (или) взносов членов товарищества, кооператива
     * 
     * @var string
     */
     public $MaintenanceAndRepairsForMembersPaymentSize = null;

    /**
     * Протокол общего собрания членов товарищества, кооператива об утверждении обязательных платежей и (или) взносов членов товарищества, кооператива
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $MaintenanceAndRepairsForMembersProtocol = [];

    /**
     * @param string $MaintenanceAndRepairsForMembersPaymentSize Размер обязательных платежей и (или) взносов членов товарищества, кооператива
     * @param \gisgkh\types\Base\AttachmentType[] $MaintenanceAndRepairsForMembersProtocol Протокол общего собрания членов товарищества, кооператива об утверждении обязательных платежей и (или) взносов членов товарищества, кооператива
     */
    public function __construct(string $MaintenanceAndRepairsForMembersPaymentSize = null, array $MaintenanceAndRepairsForMembersProtocol = [])
    {
        $this->MaintenanceAndRepairsForMembersPaymentSize = $MaintenanceAndRepairsForMembersPaymentSize;
        $this->MaintenanceAndRepairsForMembersProtocol = $MaintenanceAndRepairsForMembersProtocol;
    }
}