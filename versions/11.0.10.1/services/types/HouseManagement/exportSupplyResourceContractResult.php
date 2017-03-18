<?php

namespace gisgkh\types\HouseManagement;

/**
 * Результат экспорта договоров ресурсоснабжения
 */
class exportSupplyResourceContractResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Договор ресурсоснабжения
     * 
     * @var \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType[]
     */
     public $Contract = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType[] $Contract Договор ресурсоснабжения
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $Contract = null, $version = "10.0.2.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->Contract = $Contract;
        $this->version = $version;
    }
}