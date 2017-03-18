<?php

namespace gisgkh\services;

use opengkh\gis\Module;

use gisgkh\LocalSoapClient;
use gisgkh\types\Base\RequestHeader;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResult;
use gisgkh\types\HouseManagement\ImportResult;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use startuplab\helpers\GuidHelper;

class HouseManagementService
{
    private $wsdl = '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/schema/house-management/hcs-house-management-service.wsdl';
    private $location = 'https://217.107.108.147:10081/ext-bus-home-management-service/services/HomeManagement';

    /**
     * @param exportSupplyResourceContractRequest $request
     * @return exportSupplyResourceContractResult
     * @throws \SoapFault
     */
    public function exportSupplyResourceContractData(exportSupplyResourceContractRequest $request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/HouseManagement/exportSupplyResourceContractRequest.classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/HouseManagement/ExportSupplyResourceContractType.classmap.php'
        ));

        $header = new RequestHeader(Module::getInstance()->SenderId, Module::getInstance()->orgPPAGUID);

        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $header->orgPPAGUID = 'f9de06f2-3a3b-4c3a-b141-74913fe3d4a7';

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        $request->Id = GuidHelper::generate();

        try {
            return $client->__soapCall('exportSupplyResourceContractData', [$request]);
        } catch (\SoapFault $e) {
            echo "Exception Error!\n\n";
            echo sprintf("Last request headers: %s\n", $client->__getLastRequestHeaders());
            echo sprintf("Last request: %s\n", $client->__getLastRequest());
            echo sprintf("Class: %s\n", get_class($e));
            echo sprintf("Message: %s\n", $e->getMessage());
            throw $e;
        }
    }

    /**
     * @param importSupplyResourceContractRequest $request
     * @return ImportResult
     * @throws \SoapFault
     */
    public function importSupplyResourceContractData(importSupplyResourceContractRequest $request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/HouseManagement/ImportResult.classmap.php'
        ));

        $header = new RequestHeader(Module::getInstance()->SenderId, Module::getInstance()->orgPPAGUID);

        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $header->orgPPAGUID = 'f9de06f2-3a3b-4c3a-b141-74913fe3d4a7';

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        $request->Id = GuidHelper::generate();

        try {
            return $client->__soapCall('importSupplyResourceContractData', [$request]);
        } catch (\SoapFault $e) {
            echo "Exception Error!\n\n";
            echo sprintf("Last request headers: %s\n", $client->__getLastRequestHeaders());
            echo sprintf("Last request: %s\n", $client->__getLastRequest());
            echo sprintf("Class: %s\n", get_class($e));
            echo sprintf("Message: %s\n", $e->getMessage());
            throw $e;
        }
    }
}