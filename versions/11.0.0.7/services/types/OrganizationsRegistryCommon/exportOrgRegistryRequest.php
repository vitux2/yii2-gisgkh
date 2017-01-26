<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

use gisgkh\types\lib\BaseType;
use gisgkh\types\lib\ErrorMessageType;

/**
 * Экспорт сведений из реестра организаций
 *
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryRequest extends BaseType
{
    /**
     * @var exportOrgRegistryRequest_SearchCriteria $SearchCriteria Критерий поиска организаций
     */
    public $SearchCriteria = null;

    /**
     * @var string $lastEditingDateFrom Время последнего изменения (от)
     */
    public $lastEditingDateFrom = null;

    public $version = "10.0.2.1";

    /**
     * Constructor
     *
     * @param string|null $OGRN ОГРН
     * @param string|null $KPP КПП
     * @param string|null $OGRNIP ОГРНИП
     * @param bool $isRegistered
     * @param null $orgVersionGUID
     * @param null $orgRootEntityGUID
     */
    public function __construct($OGRN = null, $KPP = null, $OGRNIP = null, $isRegistered = true, $orgVersionGUID = null, $orgRootEntityGUID = null)
    {
        parent::__construct([]);
        $this->SearchCriteria = new exportOrgRegistryRequest_SearchCriteria($OGRN, $KPP, $OGRNIP, $isRegistered, $orgVersionGUID, $orgRootEntityGUID);
    }
}