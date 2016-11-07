<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\lib\BaseType;

/**
 * Импорт договора ресурсоснабжения
 *
 * @package gisgkh\types\HouseManagement
 */
class importSupplyResourceContractRequest extends BaseType
{
    public $version = '10.0.2.1';

    /**
     * @var importSupplyResourceContractRequest_Contract[] $Contract Договор ресурсоснабжения, до 1000 штук в одном запросе
     */
    public $Contract = null;

    /**
     * importSupplyResourceContractRequest constructor.
     * @param importSupplyResourceContractRequest_Contract $contract
     */
    public function __construct($contract = null)
    {
        //parent::__construct();
        $this->Contract = $contract;
    }

}