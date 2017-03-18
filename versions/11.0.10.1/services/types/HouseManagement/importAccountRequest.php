<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт лицевых счетов. В ImportResult/CRUDResult/UniqueNumber содержится уникальный номер счета, присвоенный ЛС в ГИС ЖКХ
 */
class importAccountRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Перечень ЛС
     * 
     * @var \gisgkh\types\HouseManagement\importAccountRequest\Account[]
     */
     public $Account = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\importAccountRequest\Account[] $Account Перечень ЛС
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Account = null, $version = "10.0.1.1")
    {
        $this->Account = $Account;
        $this->version = $version;
    }
}