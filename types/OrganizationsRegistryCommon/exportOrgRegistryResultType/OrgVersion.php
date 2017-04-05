<?php

namespace gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType;

/**
 * Версия организации в реестре организаций
 */
class OrgVersion
{
    /**
     * Идентификатор версии записи в реестре организаций
     * 
     * @var string
     */
     public $orgVersionGUID = null;

    /**
     * Время последнего изменения
     * 
     * @var string
     */
     public $lastEditingDate = null;

    /**
     * Признак актуальности записи
     * 
     * @var string
     */
     public $IsActual = null;

    /**
     * Юридическое лицо
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\LegalType
     */
     public $Legal = null;

    /**
     * Обособленное подразделение
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary
     */
     public $Subsidiary = null;

    /**
     * Индивидуальный предприниматель
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\EntpsType
     */
     public $Entrp = null;

    /**
     * ФПИЮЛ (Филиал или представительство иностранного юридического лица)
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\ForeignBranchType
     */
     public $ForeignBranch = null;

    /**
     * Статус:
(P)UBLISHED - опубликована в одном из документов в рамках раскрытия
     * 
     * @var string
     */
     public $registryOrganizationStatus = null;

    /**
     * @param string $orgVersionGUID Идентификатор версии записи в реестре организаций
     * @param string $lastEditingDate Время последнего изменения
     * @param string $IsActual Признак актуальности записи
     * @param \gisgkh\types\OrganizationsRegistryBase\LegalType $Legal Юридическое лицо
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary $Subsidiary Обособленное подразделение
     * @param \gisgkh\types\OrganizationsRegistryBase\EntpsType $Entrp Индивидуальный предприниматель
     * @param \gisgkh\types\OrganizationsRegistryBase\ForeignBranchType $ForeignBranch ФПИЮЛ (Филиал или представительство иностранного юридического лица)
     * @param string [$registryOrganizationStatus] Статус:
(P)UBLISHED - опубликована в одном из документов в рамках раскрытия
     */
    public function __construct(string $orgVersionGUID = null, string $lastEditingDate = null, string $IsActual = null, \gisgkh\types\OrganizationsRegistryBase\LegalType $Legal = null, \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType\OrgVersion\Subsidiary $Subsidiary = null, \gisgkh\types\OrganizationsRegistryBase\EntpsType $Entrp = null, \gisgkh\types\OrganizationsRegistryBase\ForeignBranchType $ForeignBranch = null, string $registryOrganizationStatus = null)
    {
        $this->orgVersionGUID = $orgVersionGUID;
        $this->lastEditingDate = $lastEditingDate;
        $this->IsActual = $IsActual;
        $this->Legal = $Legal;
        $this->Subsidiary = $Subsidiary;
        $this->Entrp = $Entrp;
        $this->ForeignBranch = $ForeignBranch;
        $this->registryOrganizationStatus = $registryOrganizationStatus;
    }
}