<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\OrganizationsRegistry\EntpsType;
use gisgkh\types\lib\OrganizationsRegistry\LegalType;
use gisgkh\types\lib\OrganizationsRegistry\SubsidiaryType;

/**
 * Версия организации в реестре организаций
 *
 * @package gisgkh\types\OrganizationsRegistryCommon
 */
class exportOrgRegistryResultType_OrgVersion extends GisgkhType
{
    /**
     * @var string $orgVersionGUID Идентификатор версии записи в реестре организаций. GUID
     */
    public $orgVersionGUID = null;

    /**
     * @var string $lastEditingDate Время последнего изменения
     */
    public $lastEditingDate = null;

    /**
     * @var string $IsActual Признак актуальности записи (true|false)
     */
    public $IsActual = null;

    /**
     * @var LegalType $Legal Юридическое лицо
     */
    public $Legal = null;

    /**
     * @var exportOrgRegistryResultType_OrgVersion_Subsidiary $Subsidiary Обособленное подразделение
     */
    public $Subsidiary = null;

    /**
     * @var EntpsType $Entrp Индивидуальный предприниматель
     */
    public $Entrp = null;

    /**
     * @var string $registryOrganizationStatus Статус: (P)UBLISHED - опубликована в одном из документов в рамках раскрытия
     */
    public $registryOrganizationStatus = null;
}