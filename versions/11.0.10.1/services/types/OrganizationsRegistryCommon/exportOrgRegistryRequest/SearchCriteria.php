<?php

namespace gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest;

/**
 * Критерий поиска организаций.
 */
class SearchCriteria
{
    /**
     * ОГРНИП
     * 
     * @var string
     */
     public $OGRNIP = null;

    /**
     * ОГРН
     * 
     * @var string
     */
     public $OGRN = null;

    /**
     * КПП
     * 
     * @var string
     */
     public $KPP = null;

    /**
     * НЗА (Номер записи об аккредитации)
     * 
     * @var string
     */
     public $NZA = null;

    /**
     * Идентификатор версии записи в реестре организаций
     * 
     * @var string
     */
     public $orgVersionGUID = null;

    /**
     * Идентификатор корневой сущности организации в реестре организаций
     * 
     * @var string
     */
     public $orgRootEntityGUID = null;

    /**
     * Поиск среди организаций, имеющих личных кабинет
     * 
     * @var string
     */
     public $isRegistered = null;

    /**
     * @param string $OGRNIP ОГРНИП
     * @param string $OGRN ОГРН
     * @param string [$KPP] КПП
     * @param string $NZA НЗА (Номер записи об аккредитации)
     * @param string $orgVersionGUID Идентификатор версии записи в реестре организаций
     * @param string $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций
     * @param string [$isRegistered] Поиск среди организаций, имеющих личных кабинет
     */
    public function __construct(string $OGRNIP = null, string $OGRN = null, string $KPP = null, string $NZA = null, string $orgVersionGUID = null, string $orgRootEntityGUID = null, string $isRegistered = null)
    {
        $this->OGRNIP = $OGRNIP;
        $this->OGRN = $OGRN;
        $this->KPP = $KPP;
        $this->NZA = $NZA;
        $this->orgVersionGUID = $orgVersionGUID;
        $this->orgRootEntityGUID = $orgRootEntityGUID;
        $this->isRegistered = $isRegistered;
    }
}