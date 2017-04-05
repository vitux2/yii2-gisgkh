<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * 
 */
class exportDataProviderResultType
{
    /**
     * Идентификатор поставщика данных
     * 
     * @var string
     */
     public $DataProviderGUID = null;

    /**
     * Статус связи: 1 - аткивен, 0- отключен
     * 
     * @var string
     */
     public $IsActual = null;

    /**
     * Организация в реестре организаций
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType
     */
     public $RegOrg = null;

    /**
     * @param string $DataProviderGUID Идентификатор поставщика данных
     * @param string $IsActual Статус связи: 1 - аткивен, 0- отключен
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType $RegOrg Организация в реестре организаций
     */
    public function __construct(string $DataProviderGUID = null, string $IsActual = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgType $RegOrg = null)
    {
        $this->DataProviderGUID = $DataProviderGUID;
        $this->IsActual = $IsActual;
        $this->RegOrg = $RegOrg;
    }
}