<?php

namespace gisgkh;

use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResult;
use startuplab\helpers\GuidHelper;

/**
 * Сервис обмена сведениями о поставщиках информации
 * Заголовки сервиса выполнены без атрибута поставщика информации (orgPPAGUID/SenderID).
 *
 * @package gisgkh
 */
class OrganizationsRegistryCommonService
{
    protected $wsdl = '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/schema/organizations-registry-common/hcs-organizations-registry-common-service.wsdl';

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
        $classMap = array_merge(
            require __DIR__ . '/types/classmap.php',
            require __DIR__ . '/types/OrganizationsRegistryCommon/exportOrgRegistryRequest.classmap.php',
            require __DIR__ . '/types/OrganizationsRegistryCommon/exportOrgRegistryRequest.classmap.php'
        );

        $soapClient = new GisgkhSoapClient($classMap, "OrganizationsRegistryCommonService");

        $soapClient->setISRequestHeader();

        $request = new exportOrgRegistryRequest();
        $request->Id = GuidHelper::generate();
        $request->SearchCriteria = new exportOrgRegistryRequest\SearchCriteria();
        $request->SearchCriteria->OGRN = $OGRN;
        $request->SearchCriteria->KPP = $KPP;
        $request->SearchCriteria->OGRNIP = $OGRNIP;
        $request->SearchCriteria->isRegistered = $isRegistered;
        $request->SearchCriteria->orgVersionGUID = $orgVersionGUID;
        $request->SearchCriteria->orgRootEntityGUID = $orgRootEntityGUID;

        return $soapClient->__soapCall('exportOrgRegistry', [$request]);
    }
}