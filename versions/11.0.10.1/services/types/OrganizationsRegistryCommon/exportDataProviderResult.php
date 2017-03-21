<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * 
 */
class exportDataProviderResult extends \gisgkh\types\Base\BaseType
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
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportDataProviderResultType[]
     */
     public $exportDataProviderResult = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\OrganizationsRegistryCommon\exportDataProviderResultType[] $exportDataProviderResult 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $exportDataProviderResult = null, $version = "10.0.2.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->exportDataProviderResult = $exportDataProviderResult;
        $this->version = $version;
    }
}