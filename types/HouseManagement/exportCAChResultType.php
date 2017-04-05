<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportCAChResultType
{
    /**
     * ДУ
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Contract
     */
     public $Contract = null;

    /**
     * Устав
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter
     */
     public $Charter = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Contract $Contract ДУ
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter $Charter Устав
     */
    public function __construct(\gisgkh\types\HouseManagement\exportCAChResultType\Contract $Contract = null, \gisgkh\types\HouseManagement\exportCAChResultType\Charter $Charter = null)
    {
        $this->Contract = $Contract;
        $this->Charter = $Charter;
    }
}