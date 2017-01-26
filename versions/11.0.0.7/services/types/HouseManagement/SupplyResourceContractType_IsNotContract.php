<?php

namespace gisgkh\types\HouseManagement;

/**
 * Реквизиты догвора, который является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_IsNotContract extends SupplyResourceContractType_IsContract
{
    public function __construct()
    {
        parent::__construct(null, null, null, null);
    }
}