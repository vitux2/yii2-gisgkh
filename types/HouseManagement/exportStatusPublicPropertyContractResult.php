<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на запрос экспорта ДОИ
 */
class exportStatusPublicPropertyContractResult extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType
     */
     public $exportStatusPublicPropertyContract = null;

    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType $exportStatusPublicPropertyContract 
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType $exportStatusPublicPropertyContract = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.1")
    {
        $this->exportStatusPublicPropertyContract = $exportStatusPublicPropertyContract;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}