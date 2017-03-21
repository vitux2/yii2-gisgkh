<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * Экспорт сведений из реестра организаций
 */
class exportOrgRegistryRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Критерий поиска организаций.
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest\SearchCriteria[]
     */
     public $SearchCriteria = null;

    /**
     * Время последнего изменения (от)
     * 
     * @var string
     */
     public $lastEditingDateFrom = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryRequest\SearchCriteria[] $SearchCriteria Критерий поиска организаций.
     * @param string [$lastEditingDateFrom] Время последнего изменения (от)
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $SearchCriteria = null, string $lastEditingDateFrom = null, $version = "10.0.2.1")
    {
        $this->SearchCriteria = $SearchCriteria;
        $this->lastEditingDateFrom = $lastEditingDateFrom;
        $this->version = $version;
    }
}