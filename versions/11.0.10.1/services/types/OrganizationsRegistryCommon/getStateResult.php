<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * Возврат статуса отправленного сообщения
 */
class getStateResult extends \gisgkh\types\Base\BaseAsyncResponseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Base\CommonResultType[]
     */
     public $ImportResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType[]
     */
     public $exportOrgRegistryResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportDataProviderResultType[]
     */
     public $exportDataProviderResult = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\Base\CommonResultType[] $ImportResult 
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType[] $exportOrgRegistryResult 
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportDataProviderResultType[] $exportDataProviderResult 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $ImportResult = [], array $exportOrgRegistryResult = [], array $exportDataProviderResult = [], $version = "10.0.2.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->ImportResult = $ImportResult;
        $this->exportOrgRegistryResult = $exportOrgRegistryResult;
        $this->exportDataProviderResult = $exportDataProviderResult;
        $this->version = $version;
    }
}