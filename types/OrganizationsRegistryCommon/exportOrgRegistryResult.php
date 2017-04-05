<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * 
 */
class exportOrgRegistryResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Найденная организация.
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType[]
     */
     public $OrgData = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType[] [$OrgData] Найденная организация.
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $OrgData = null, $version = "10.0.2.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->OrgData = $OrgData;
        $this->version = $version;
    }
}