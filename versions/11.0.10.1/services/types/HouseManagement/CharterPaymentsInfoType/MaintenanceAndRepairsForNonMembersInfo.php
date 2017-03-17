<?php

namespace gisgkh\types\HouseManagement\CharterPaymentsInfoType;

/**
 * Информация о размере платы за содержание и ремонт жилого помещения для собственника
помещения в МКД, не являющегося членом товарищества, кооператива
 */
class MaintenanceAndRepairsForNonMembersInfo
{
    /**
     * Размер платы за содержание и ремонт жилого помещения для собственника помещения в МКД
     * 
     * @var string
     */
     public $MaintenanceAndRepairsForNonMembersPaymentSize = null;

    /**
     * Протокол общего собрания членов товарищества, кооператива об утверждении размера платы за содержание и ремонт жилого помещения для собственника помещения в многоквартирном доме
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $MaintenanceAndRepairsForNonMembersProtocol = [];

    /**
     * @param string $MaintenanceAndRepairsForNonMembersPaymentSize Размер платы за содержание и ремонт жилого помещения для собственника помещения в МКД
     * @param \gisgkh\types\Base\AttachmentType[] $MaintenanceAndRepairsForNonMembersProtocol Протокол общего собрания членов товарищества, кооператива об утверждении размера платы за содержание и ремонт жилого помещения для собственника помещения в многоквартирном доме
     */
    public function __construct(string $MaintenanceAndRepairsForNonMembersPaymentSize = null, array $MaintenanceAndRepairsForNonMembersProtocol = [])
    {
        $this->MaintenanceAndRepairsForNonMembersPaymentSize = $MaintenanceAndRepairsForNonMembersPaymentSize;
        $this->MaintenanceAndRepairsForNonMembersProtocol = $MaintenanceAndRepairsForNonMembersProtocol;
    }
}