<?php

namespace gisgkh\services;

use gisgkh\LocalSoapClient;
use gisgkh\types\Base\ISRequestHeader;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest\SearchCriteria;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResult;
use gisgkh\Helper;

/**
 * Сервис обмена сведениями о поставщиках информации
 */
class OrganizationsRegistryCommonService
{
    protected $wsdl = __DIR__ . '/../schemes/organizations-registry-common/hcs-organizations-registry-common-service.wsdl';

    private $location = null;
    private $sslCert = null;
    private $sslKey = null;
    private $caInfo = null;
    private $username = null;
    private $password = null;

    /**
     * OrganizationsRegistryCommonService constructor.
     *
     * <code>
     *  $configuration = [
     *    "location" => "",,
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
        $classmap = array_merge(
            require __DIR__ . '/../types/classmap.php',
            require __DIR__ . '/../types/OrganizationsRegistryCommon/exportOrgRegistryRequest.classmap.php',
            require __DIR__ . '/../types/OrganizationsRegistryCommon/exportOrgRegistryResult.classmap.php'
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

        $request = new exportOrgRegistryRequest([new SearchCriteria($OGRNIP, $OGRN, $KPP, null, $orgVersionGUID, $orgRootEntityGUID, $isRegistered)]);
        $request->Id = Helper::guid();

        return $client->__soapCall('exportOrgRegistry', [$request]);
    }
}