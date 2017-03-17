<?php

namespace gisgkh\types\HouseManagement\importAccountRequest;

/**
 * Перечень ЛС
 */
class Account extends \gisgkh\types\HouseManagement\AccountType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Номер лицевого счета/Иной идентификтатор плательщика
     * 
     * @var string
     */
     public $AccountNumber = null;

    /**
     * Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * 
     * @var string
     */
     public $AccountGUID = null;

    /**
     * Конкретизация оснований ЛС (договоров ресурсоснабжения и/или договоров социального найма)
     * 
     * @var \gisgkh\types\HouseManagement\AccountReasonsImportType
     */
     public $AccountReasons = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$AccountNumber] Номер лицевого счета/Иной идентификтатор плательщика
     * @param string [$AccountGUID] Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * @param \gisgkh\types\HouseManagement\AccountReasonsImportType [$AccountReasons] Конкретизация оснований ЛС (договоров ресурсоснабжения и/или договоров социального найма)
     */
    public function __construct(string $TransportGUID = null, string $AccountNumber = null, string $AccountGUID = null, \gisgkh\types\HouseManagement\AccountReasonsImportType $AccountReasons = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->AccountNumber = $AccountNumber;
        $this->AccountGUID = $AccountGUID;
        $this->AccountReasons = $AccountReasons;
    }
}