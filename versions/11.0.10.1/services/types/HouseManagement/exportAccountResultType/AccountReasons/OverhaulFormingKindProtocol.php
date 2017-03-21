<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons;

/**
 * Протокол решения собственников о выбранном способе формирования фонда капитального ремонта
 */
class OverhaulFormingKindProtocol
{
    /**
     * Идентификатор протокола решения собственников о выбранном способе формирования фонда капитального ремонта
     * 
     * @var string
     */
     public $OverhaulFormingKindProtocolGUID = null;

    /**
     * @param string $OverhaulFormingKindProtocolGUID Идентификатор протокола решения собственников о выбранном способе формирования фонда капитального ремонта
     */
    public function __construct(string $OverhaulFormingKindProtocolGUID = null)
    {
        $this->OverhaulFormingKindProtocolGUID = $OverhaulFormingKindProtocolGUID;
    }
}