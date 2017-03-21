<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип информации о размере платы за жилое помещение по уставу
 */
class CharterPaymentsInfoType
{
    /**
     * Дата начала периода
     * 
     * @var string
     */
     public $BeginDate = null;

    /**
     * Дата окончания периода
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Информация о размере обязательных платежей и (или) взносов членов товарищества, кооператива,
связанных с оплатой расходов на содержание и текущий ремонт общего имущества в МКД
     * 
     * @var \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForMembers
     */
     public $MaintenanceAndRepairsForMembers = null;

    /**
     * Информация о размере платы за содержание и ремонт жилого помещения для собственника
помещения в МКД, не являющегося членом товарищества, кооператива
     * 
     * @var \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForNonMembersInfo
     */
     public $MaintenanceAndRepairsForNonMembersInfo = null;

    /**
     * Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме
     * 
     * @var \gisgkh\types\HouseManagement\CharterPaymentsInfoType\ServicePayment[]
     */
     public $ServicePayment = null;

    /**
     * @param string $BeginDate Дата начала периода
     * @param string $EndDate Дата окончания периода
     * @param \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForMembers [$MaintenanceAndRepairsForMembers] Информация о размере обязательных платежей и (или) взносов членов товарищества, кооператива,
связанных с оплатой расходов на содержание и текущий ремонт общего имущества в МКД
     * @param \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForNonMembersInfo [$MaintenanceAndRepairsForNonMembersInfo] Информация о размере платы за содержание и ремонт жилого помещения для собственника
помещения в МКД, не являющегося членом товарищества, кооператива
     * @param \gisgkh\types\HouseManagement\CharterPaymentsInfoType\ServicePayment[] [$ServicePayment] Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме
     */
    public function __construct(string $BeginDate = null, string $EndDate = null, \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForMembers $MaintenanceAndRepairsForMembers = null, \gisgkh\types\HouseManagement\CharterPaymentsInfoType\MaintenanceAndRepairsForNonMembersInfo $MaintenanceAndRepairsForNonMembersInfo = null, array $ServicePayment = null)
    {
        $this->BeginDate = $BeginDate;
        $this->EndDate = $EndDate;
        $this->MaintenanceAndRepairsForMembers = $MaintenanceAndRepairsForMembers;
        $this->MaintenanceAndRepairsForNonMembersInfo = $MaintenanceAndRepairsForNonMembersInfo;
        $this->ServicePayment = $ServicePayment;
    }
}