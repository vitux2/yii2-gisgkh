<?php

namespace gisgkh;

use gisgkh\types\NsiCommon\exportNsiItemRequest;
use gisgkh\types\NsiCommon\exportNsiItemResult;
use gisgkh\types\NsiCommon\exportNsiListRequest;
use gisgkh\types\NsiCommon\exportNsiListResult;
use startuplab\helpers\GuidHelper;

/**
 * Сервис общесистемной НСИ
 * Сервис позволяет выгрузить общесистемные справочники НСИ и НСИ РАО.
 * Заголовки сервиса выполнены без атрибута поставщика информации (orgPPAGUID/SenderID).
 *
 * @package gisgkh
 */
class NsiCommonService extends GisgkhSoapClient
{
    /**
     * @param integer $registryNumber
     * @param \DateTime $modifiedAfter
     * @param string $listGroup NSI | NSIRAO
     * @return exportNsiItemResult
     */
    public function exportNsiItem($registryNumber, $modifiedAfter = null, $listGroup = 'NSI')
    {
        $this->setISRequestHeader();

        $request = new exportNsiItemRequest($registryNumber, $modifiedAfter, $listGroup);
        $request->Id = GuidHelper::generate();

        /* @var exportNsiItemResult $nsiItemResult */
        $nsiItemResult = $this->__soapCall('exportNsiItem', [$request]);

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

        return $nsiItemResult;
    }

    /**
     * @param string $listGroup Группа справочника: NSI - (по умолчанию) общесистемный; NSIRAO - ОЖФ
     * @return exportNsiListResult
     */
    public function exportNsiList($listGroup = 'NSI')
    {
        $this->setISRequestHeader();

        /* @var exportNsiListResult $nsiListResult */
        $nsiListResult = $this->__soapCall('exportNsiList', [new exportNsiListRequest($listGroup)]);

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