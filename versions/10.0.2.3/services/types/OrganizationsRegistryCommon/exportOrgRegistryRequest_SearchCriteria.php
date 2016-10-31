<?php

namespace gisgkh\types\OrganizationsRegistryCommon;
use gisgkh\types\GisgkhType;

/**
 * Критерий поиска организаций
 *
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryRequest_SearchCriteria extends GisgkhType
{

    /**
     * @var string $OGRNIP ОГРНИП. 15 символов
     */
    public $OGRNIP = null;

    /**
     * @var string $OGRN ОГРН. 13 символов
     */
    public $OGRN = null;

    /**
     * @var string $KPP КПП. 9 цифр
     */
    public $KPP = null;

    /**
     * @var string $orgVersionGUID Идентификатор версии записи в реестре организаций. GUID
     */
    public $orgVersionGUID = null;

    /**
     * @var string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций. GUID
     */
    public $orgRootEntityGUID = null;

    /**
     * @var string $isRegistered true | false
     */
    public $isRegistered = 'true';

    /**
     * exportOrgRegistryRequest_SearchCriteria constructor.
     * @param string|null $OGRN ОГРН
     * @param string|null $KPP КПП
     * @param string|null $OGRNIP ОГРНИП
     * @param bool $isRegistered
     * @param null $orgVersionGUID
     * @param null $orgRootEntityGUID
     */
    public function __construct($OGRN = null, $KPP = null, $OGRNIP = null, $isRegistered = true, $orgVersionGUID = null, $orgRootEntityGUID = null)
    {
        $this->OGRN = $OGRN;
        $this->KPP = $KPP;
        $this->OGRNIP = $OGRNIP;
        $this->setIsRegistered($isRegistered);
        $this->orgVersionGUID = $orgVersionGUID;
        $this->orgRootEntityGUID = $orgRootEntityGUID;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setIsRegistered($value = true)
    {
        $this->isRegistered = $value ? 'true' : 'false';
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRegistered()
    {
        return filter_var($this->isRegistered, FILTER_VALIDATE_BOOLEAN);
    }
}