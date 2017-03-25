<?php

namespace gisgkh\services;

use gisgkh\Helper;
use gisgkh\LocalSoapClient;
use gisgkh\types\Base\AckRequest;
use gisgkh\types\Base\getStateRequest;
use gisgkh\types\Base\RequestHeader;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\getStateResult;
use gisgkh\types\HouseManagement\ImportResult;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;

/**
 * Сервис управления объектами РАО
 *
 * @package gisgkh\services
 */
class HouseManagementServiceAsync
{
    private $wsdl = __DIR__ . '/../../schema/house-management/hcs-house-management-service-async.wsdl';
    private $location = 'https://217.107.108.147:10081/ext-bus-home-management-service/services/HomeManagementAsync';

    private $senderId = null;
//    private $orgPPAGUID = 'f9de06f2-3a3b-4c3a-b141-74913fe3d4a7';
    private $orgPPAGUID = '51665933-31f9-4d6b-9d41-00a3ae4e80e3';
//    private $orgPPAGUID = '3bd8574c-cdf9-4213-ba89-0eca58478a7e';

    /**
     * Экспорт договоров ресурсоснабжения
     *
     * @param exportSupplyResourceContractRequest $request
     * @return AckRequest
     * @throws \SoapFault
     */
    public function exportSupplyResourceContractData(exportSupplyResourceContractRequest $request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/exportSupplyResourceContractRequest.classmap.php',
            require __DIR__ . '/../types/Base/AckRequest.classmap.php'
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

    /**
     *
     *
     * @param getStateRequest $request
     * @return getStateResult
     */
    public function getState($request)
    {
        $client = new LocalSoapClient($this->wsdl, $this->location, array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/Base/getStateRequest.classmap.php',
            require __DIR__ . '/../types/HouseManagement/getStateResult.classmap.php'
        ));

        $header = new RequestHeader($this->senderId, $this->orgPPAGUID);

        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        return $client->__soapCall('getState', [$request]);
    }
}