<?php

namespace gisgkh;

use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResult;

/**
 * Сервис обмена сведениями о поставщиках информации
 * Заголовки сервиса выполнены без атрибута поставщика информации (orgPPAGUID/SenderID).
 *
 * @package gisgkh
 */
class OrganizationsRegistryCommonService extends GisgkhSoapClient
{

    /**
     * экспорт сведений об организациях
     *
     * @param string|null $OGRN ОГРН
     * @param string|null $KPP КПП
     * @param string|null $OGRNIP ОГРНИП
     * @param bool $isRegistered
     * @param null $orgVersionGUID
     * @param null $orgRootEntityGUID
     *
     * @return exportOrgRegistryResult
     */
    public function exportOrgRegistry($OGRN = null, $KPP = null, $OGRNIP = null, $isRegistered = true, $orgVersionGUID = null, $orgRootEntityGUID = null)
    {
        $this->setISRequestHeader();

        $request = new exportOrgRegistryRequest($OGRN, $KPP, $OGRNIP, $isRegistered, $orgVersionGUID, $orgRootEntityGUID);

        return $this->__soapCall('exportOrgRegistry', [$request]);
    }
}