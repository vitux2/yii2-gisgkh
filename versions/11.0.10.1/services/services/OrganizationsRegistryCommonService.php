<?php

namespace gisgkh\services;

use gisgkh\LocalSoapClient;
use gisgkh\types\Base\ISRequestHeader;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest\SearchCriteria;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResult;
use gisgkh\Helper;

class OrganizationsRegistryCommonService
{
    protected $wsdl = __DIR__ . '/../../schema/organizations-registry-common/hcs-organizations-registry-common-service.wsdl';
    protected $location = 'https://217.107.108.147:10081/ext-bus-org-registry-common-service/services/OrgRegistryCommon';

    /**
     * экспорт сведений об организациях
     *
     * @throws \SoapFault
     *
     * @param string|null $OGRN ОГРН
     * @param string|null $KPP КПП
     * @param string|null $OGRNIP ОГРНИП
     * @param bool $isRegistered
     * @param null $orgVersionGUID
     * @param null $orgRootEntityGUID
     * @return exportOrgRegistryResult
     */
    public function exportOrgRegistry($OGRN = null, $KPP = null, $OGRNIP = null, $isRegistered = true, $orgVersionGUID = null, $orgRootEntityGUID = null)
    {
        $classMap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/OrganizationsRegistryCommon/exportOrgRegistryRequest.classmap.php',
            require __DIR__ . '/../types/OrganizationsRegistryCommon/exportOrgRegistryResult.classmap.php'
        );

        $client = new LocalSoapClient($this->wsdl, $this->location, $classMap);

        $header = new ISRequestHeader();
        $header->MessageGUID = Helper::guid();
        $header->Date = (new \DateTime())->format(\DateTime::ATOM);
        $client->__setSoapHeaders(new \SoapHeader("http://dom.gosuslugi.ru/schema/integration/base/", 'ISRequestHeader', $header));

        $request = new exportOrgRegistryRequest([new SearchCriteria($OGRNIP, $OGRN, $KPP, null, $orgVersionGUID, $orgRootEntityGUID, $isRegistered)]);
        $request->Id = Helper::guid();

        return $client->__soapCall('exportOrgRegistry', [$request]);
    }
}