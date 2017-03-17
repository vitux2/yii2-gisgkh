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
    protected $wsdl = '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/schema/nsi-common/hcs-nsi-common-service.wsdl';
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
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/NsiCommon/exportNsiItemRequest.classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/NsiCommon/exportNsiItemResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportNsiItemRequest($registryNumber, $listGroup, $modifiedAfter);
        $request->Id = GuidHelper::generate();

        try {

            /* @var exportNsiItemResult $nsiItemResult */
            $nsiItemResult = $client->__soapCall('exportNsiItem', [$request]);

            if (!empty($nsiItemResult->ErrorMessage)) {
                \Yii::error(
                    sprintf(
                        'Ошибка импорта перечня справочников ГИС ЖКХ. %s: %s',
                        $nsiItemResult->ErrorMessage->ErrorCode,
                        $nsiItemResult->ErrorMessage->Description
                    ),
                    __METHOD__
                );
            }

        } catch (\SoapFault $e) {

            print "Soap Error!\n\n";
            print sprintf("Last request headers: %s\n", $client->__getLastRequestHeaders());
            print sprintf("Last request: %s\n", $client->__getLastRequest());
            print sprintf("Class: %s\n", get_class($e));
            print sprintf("Message: %s\n", $e->getMessage());
        }

        return $nsiItemResult;
    }

    /**
     * @param string $listGroup Группа справочника: NSI - (по умолчанию) общесистемный; NSIRAO - ОЖФ
     * @return exportNsiListResult
     */
    public function exportNsiList($listGroup = 'NSI')
    {
        $classMap = array_merge(
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/NsiCommon/exportNsiListRequest.classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/NsiCommon/exportNsiListResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        /* @var exportNsiListResult $nsiListResult */
        $nsiListResult = $client->__soapCall('exportNsiList', [new exportNsiListRequest($listGroup)]);

        if (!empty($nsiListResult->ErrorMessage)) {
            \Yii::error(
                sprintf(
                    'Ошибка импорта перечня справочников ГИС ЖКХ. %s: %s',
                    $nsiListResult->ErrorMessage->ErrorCode,
                    $nsiListResult->ErrorMessage->Description
                ),
                __METHOD__
            );
        }

        return $nsiListResult;
    }
}