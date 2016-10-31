<?php

namespace gisgkh;

use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResult;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\lib\ImportResult;

/**
 * Сервис предназначен для загрузки основных сведений, необходимых для размещения оснований управления МКД,
 * лицевых счетов, приборов учета и начислений.
 *
 * @package gisgkh
 */
class HouseManagementService extends GisgkhSoapClient
{
    /**
     * @param exportSupplyResourceContractRequest $request
     * @return exportSupplyResourceContractResult
     */
    public function exportSupplyResourceContractData($request)
    {
        $this->setRequestHeader();

        return $this->__soapCall('exportSupplyResourceContractData', [$request]);
    }

    /**
     * @param importSupplyResourceContractRequest $request
     * @return ImportResult
     */
    public function importSupplyResourceContractData($request)
    {
        $this->setRequestHeader();

        return $this->__soapCall('importSupplyResourceContractData', [$request]);
    }
}