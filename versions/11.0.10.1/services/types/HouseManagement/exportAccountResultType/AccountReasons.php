<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType;

/**
 * Основания ЛС
 */
class AccountReasons extends \gisgkh\types\HouseManagement\AccountReasonsImportType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Contract
     */
     public $Contract = null;

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Charter
     */
     public $Charter = null;

    /**
     * Протокол решения собственников о выбранном способе формирования фонда капитального ремонта
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindProtocol
     */
     public $OverhaulFormingKindProtocol = null;

    /**
     * Решение ОМС о выбранном способе формирования фонда капитального ремонта
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindOMSDescision
     */
     public $OverhaulFormingKindOMSDescision = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Contract [$Contract] 
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Charter [$Charter] 
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindProtocol [$OverhaulFormingKindProtocol] Протокол решения собственников о выбранном способе формирования фонда капитального ремонта
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindOMSDescision [$OverhaulFormingKindOMSDescision] Решение ОМС о выбранном способе формирования фонда капитального ремонта
     */
    public function __construct(\gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Contract $Contract = null, \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\Charter $Charter = null, \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindProtocol $OverhaulFormingKindProtocol = null, \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons\OverhaulFormingKindOMSDescision $OverhaulFormingKindOMSDescision = null)
    {
        $this->Contract = $Contract;
        $this->Charter = $Charter;
        $this->OverhaulFormingKindProtocol = $OverhaulFormingKindProtocol;
        $this->OverhaulFormingKindOMSDescision = $OverhaulFormingKindOMSDescision;
    }
}