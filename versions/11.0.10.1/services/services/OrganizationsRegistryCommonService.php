<?php

namespace gisgkh\services;

use gisgkh\LocalSoapClient;
use gisgkh\types\Base\ISRequestHeader;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest\SearchCriteria;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResult;
use startuplab\helpers\GuidHelper;

class OrganizationsRegistryCommonService
{
    protected $wsdl = '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/schema/organizations-registry-common/hcs-organizations-registry-common-service.wsdl';
    protected $location = 'https://217.107.108.147:10081/ext-bus-org-registry-common-service/services/OrgRegistryCommon';

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
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/OrganizationsRegistryCommon/exportOrgRegistryRequest.classmap.php',
            require '/home/user/Workspace/rias-web/modules/opengkh/versions/11.0.10.1/services/types/OrganizationsRegistryCommon/exportOrgRegistryResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = GuidHelper::generate();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportOrgRegistryRequest([new SearchCriteria($OGRNIP, $OGRN, $KPP, null, $orgVersionGUID, $orgRootEntityGUID, $isRegistered)]);
        $request->Id = GuidHelper::generate();

        try {
            return $client->__soapCall('exportOrgRegistry', [$request]);
        } catch (\SoapFault $e) {
            echo "Exception Error!\n\n";
            echo sprintf("Last request headers: %s\n", $client->__getLastRequestHeaders());
            echo sprintf("Last request: %s\n", $client->__getLastRequest());
            echo sprintf("Class: %s\n", get_class($e));
            echo sprintf("Message: %s\n", $e->getMessage());
            throw $e;
        }
    }
}