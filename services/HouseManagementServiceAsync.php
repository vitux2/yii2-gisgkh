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
    private $wsdl = __DIR__ . '/../schemes/house-management/hcs-house-management-service-async.wsdl';

    private $location = null;
    private $senderId = null;
    private $orgPPAGUID = null;
    private $sslCert = null;
    private $sslKey = null;
    private $caInfo = null;
    private $username = null;
    private $password = null;

    /**
     * NsiCommonService constructor.
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
     * @return AckRequest
     * @throws \SoapFault
     */
    public function exportSupplyResourceContractData(exportSupplyResourceContractRequest $request)
    {
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/exportSupplyResourceContractRequest.classmap.php',
            require __DIR__ . '/../types/Base/AckRequest.classmap.php'
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
        $header->IsOperatorSignature = true;

        $client->__setSoapHeaders(new \SoapHeader('http://dom.gosuslugi.ru/schema/integration/base/', 'RequestHeader', $header));

        return $client->__soapCall('importSupplyResourceContractData', [$request]);
    }

    /**
     * @param getStateRequest $request
     * @return getStateResult
     */
    public function getState(getStateRequest $request)
    {
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/HouseManagement/getStateResult.classmap.php',
            require __DIR__ . '/../types/HouseManagement/ExportSupplyResourceContractType.classmap.php',
            require __DIR__ . '/../types/HouseManagement/exportSupplyResourceContractResultType.classmap.php',
            require __DIR__ . '/../types/HouseManagement/DRSOIndType.classmap.php',
            require __DIR__ . '/../types/IndividualRegistryBase/ID.classmap.php',
            require __DIR__ . '/../types/Base/Attachment.classmap.php'
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

        return $client->__soapCall('getState', [$request]);
    }
}