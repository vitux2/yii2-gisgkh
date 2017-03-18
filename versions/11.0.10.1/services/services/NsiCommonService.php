<?php

namespace gisgkh\services;

use gisgkh\LocalSoapClient;
use gisgkh\types\Base\ISRequestHeader;
use gisgkh\types\NsiCommon\exportNsiItemRequest;
use gisgkh\types\NsiCommon\exportNsiItemResult;
use gisgkh\types\NsiCommon\exportNsiListRequest;
use gisgkh\types\NsiCommon\exportNsiListResult;
use startuplab\helpers\GuidHelper;

class NsiCommonService
{
    protected $wsdl = __DIR__ . '/../../schema/nsi-common/hcs-nsi-common-service.wsdl';
    protected $location = 'https://217.107.108.147:10081/ext-bus-nsi-common-service/services/NsiCommon';

    /**
     * @param integer $registryNumber
     * @param \DateTime $modifiedAfter
     * @param string $listGroup NSI | NSIRAO
     * @return exportNsiItemResult
     */
    public function exportNsiItem($registryNumber, $modifiedAfter = null, $listGroup = 'NSI')
    {
        $classMap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiItemRequest.classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiItemResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportNsiItemRequest($registryNumber, $listGroup, $modifiedAfter);
        $request->Id = GuidHelper::generate();

        return $client->__soapCall('exportNsiItem', [$request]);
    }

    /**
     * @param string $listGroup Группа справочника: NSI - (по умолчанию) общесистемный; NSIRAO - ОЖФ
     * @return exportNsiListResult
     */
    public function exportNsiList($listGroup = 'NSI')
    {
        $classMap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiListRequest.classmap.php',
            require __DIR__ . '/../types/NsiCommon/exportNsiListResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        return $client->__soapCall('exportNsiList', [new exportNsiListRequest($listGroup)]);
    }
}