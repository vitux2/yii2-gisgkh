<?php

namespace gisgkh\services;

use gisgkh\Helper;
use gisgkh\LocalSoapClient;
use gisgkh\types\Base\RequestHeader;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResult;
use gisgkh\types\HouseManagement\ImportResult;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;

/**
 * Сервис управления объектами РАО
 *
 * @package gisgkh\services
 */
class HouseManagementService
{
    private $wsdl = __DIR__ . '/../../schema/house-management/hcs-house-management-service.wsdl';
    private $location = 'https://217.107.108.147:10081/ext-bus-home-management-service/services/HomeManagement';

    private $senderId = null;
    private $orgPPAGUID = 'f9de06f2-3a3b-4c3a-b141-74913fe3d4a7';

    /**
     * Экспорт договоров ресурсоснабжения
     *
     * @param exportSupplyResourceContractRequest $request
     * @return exportSupplyResourceContractResult
     * @throws \SoapFault
     */
    public function exportSupplyResourceContractData(exportSupplyResourceContractRequest $request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/exportSupplyResourceContractRequest.classmap.php',
            require __DIR__ . '/../types/HouseManagement/ExportSupplyResourceContractType.classmap.php'
        ));

        $header = new RequestHeader($this->senderId, $this->orgPPAGUID);

        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        return $client->__soapCall('exportSupplyResourceContractData', [$request]);
    }

    /**
     * Импорт договора ресурсоснабжения с РСО
     *
     * @param importSupplyResourceContractRequest $request
     * @return ImportResult
     * @throws \SoapFault
     */
    public function importSupplyResourceContractData(importSupplyResourceContractRequest $request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/ImportResult.classmap.php'
        ));

        $header = new RequestHeader($this->senderId, $this->orgPPAGUID);

        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        return $client->__soapCall('importSupplyResourceContractData', [$request]);
    }
}