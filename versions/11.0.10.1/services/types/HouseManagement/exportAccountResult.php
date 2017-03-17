<?php

namespace gisgkh\types\HouseManagement;

/**
 * Статус выгрузки ЛС
 */
class exportAccountResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Характеристика ЛС
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType[]
     */
     public $Accounts = [];

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
    public $version = "11.0.0.2";

    /**
     * @param \gisgkh\types\HouseManagement\exportAccountResultType[] $Accounts Характеристика ЛС
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Accounts = [], \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "11.0.0.2")
    {
        $this->Accounts = $Accounts;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}