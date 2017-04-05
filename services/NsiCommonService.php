<?php

namespace gisgkh\services;

use gisgkh\Helper;
use gisgkh\LocalSoapClient;
use gisgkh\types\Base\ISRequestHeader;
use gisgkh\types\NsiCommon\exportNsiItemRequest;
use gisgkh\types\NsiCommon\exportNsiItemResult;
use gisgkh\types\NsiCommon\exportNsiListRequest;
use gisgkh\types\NsiCommon\exportNsiListResult;

class NsiCommonService
{
    protected $wsdl = __DIR__ . '/../schemes/nsi-common/hcs-nsi-common-service.wsdl';

    private $location = null;
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
        $this->sslCert = @$configuration['sslCert'];
        $this->sslKey = @$configuration['sslKey'];
        $this->caInfo = @$configuration['caInfo'];
        $this->username = @$configuration['username'];
        $this->password = @$configuration['password'];
    }

    /**
     * @param integer $registryNumber
     * @param \DateTime $modifiedAfter
     * @param string $listGroup NSI | NSIRAO
     * @return exportNsiItemResult
     */
    public function exportNsiItem($registryNumber, $modifiedAfter = null, $listGroup = 'NSI')
    {
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiItemRequest.classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiItemResult.classmap.php'
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

        $header = new ISRequestHeader();
        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportNsiItemRequest($registryNumber, $listGroup, $modifiedAfter);
        $request->Id = Helper::guid();

        return $client->__soapCall('exportNsiItem', [$request]);
    }

    /**
     * @param string $listGroup Группа справочника: NSI - (по умолчанию) общесистемный; NSIRAO - ОЖФ
     * @return exportNsiListResult
     */
    public function exportNsiList($listGroup = 'NSI')
    {
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiListRequest.classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiListResult.classmap.php'
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

        $header = new ISRequestHeader();
        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportNsiListRequest($listGroup);
        $request->Id = Helper::guid();

        return $client->__soapCall('exportNsiList', [$request]);
    }
}