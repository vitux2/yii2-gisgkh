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
    private $wsdl = __DIR__ . '/../schemes/house-management/hcs-house-management-service.wsdl';

    private $location = null;
    private $senderId = null;
    private $orgPPAGUID = null;
    private $sslCert = null;
    private $sslKey = null;
    private $caInfo = null;
    private $username = null;
    private $password = null;

    /**
     * HouseManagementService constructor.
     *
     * <code>
     *  $configuration = [
     *    "location" => "",
     *    "senderId" => "",
     *    "orgPPAGUID" => "",
     *    "sslCert" => "",
     *    "sslKey" => "",
     *    "caInfo" => "",
     *    "username" => "",
     *    "password" => ""
     *  ];
     * </code>
     *
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->location = @$configuration['location'];
        $this->senderId = @$configuration['senderId'];
        $this->orgPPAGUID = @$configuration['orgPPAGUID'];
        $this->sslCert = @$configuration['sslCert'];
        $this->sslKey = @$configuration['sslKey'];
        $this->caInfo = @$configuration['caInfo'];
        $this->username = @$configuration['username'];
        $this->password = @$configuration['password'];
    }

    /**
     * Экспорт договоров ресурсоснабжения
     *
     * @param exportSupplyResourceContractRequest $request
     * @return exportSupplyResourceContractResult
     * @throws \SoapFault
     */
    public function exportSupplyResourceContractData(exportSupplyResourceContractRequest $request)
    {
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/exportSupplyResourceContractResult.classmap.php',
            require __DIR__ . '/../types/HouseManagement/ExportSupplyResourceContractType.classmap.php'
        );

        $client = new LocalSoapClient(
            $this->wsdl,
            $this->username,
            $this->password,
            $this->location,
            $this->sslCert,
            $this->sslKey,
            $this->caInfo,
            $classmap
        );

        $header = new RequestHeader($this->senderId, $this->orgPPAGUID);

        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $header->IsOperatorSignature = true;

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
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/ImportResult.classmap.php'
        );

        $client = new LocalSoapClient(
            $this->wsdl,
            $this->username,
            $this->password,
            $this->location,
            $this->sslCert,
            $this->sslKey,
            $this->caInfo,
            $classmap
        );

        $header = new RequestHeader($this->senderId, $this->orgPPAGUID);

        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        return $client->__soapCall('importSupplyResourceContractData', [$request]);
    }
}