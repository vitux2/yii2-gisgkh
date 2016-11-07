<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;
use startuplab\helpers\GuidHelper;

/**
 * Критерий поиска договора ресурсоснабжения по предмету договора
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_ContractSubject extends ContractSubjectType
{
    /**
     * @var string $TransportGUID Транспортный идентификатор
     */
    public $TransportGUID = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->TransportGUID = GuidHelper::generate();
    }
}