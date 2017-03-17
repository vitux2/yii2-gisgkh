<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт ЛС
 */
class exportAccountResultType extends \gisgkh\types\HouseManagement\AccountType
{
    /**
     * Основания ЛС
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons
     */
     public $AccountReasons = null;

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
     * Единый лицевой счет
     * 
     * @var string
     */
     public $UnifiedAccountNumber = null;

    /**
     * Cведения об обязательствах
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType\Obligations[]
     */
     public $Obligations = [];

    /**
     * Идентификатор жилищно-коммунальной услуги
     * 
     * @var string
     */
     public $ServiceID = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons [$AccountReasons] Основания ЛС
     * @param string [$AccountNumber] Номер лицевого счета/Иной идентификтатор плательщика
     * @param string $AccountGUID Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * @param string $UnifiedAccountNumber Единый лицевой счет
     * @param \gisgkh\types\HouseManagement\exportAccountResultType\Obligations[] [$Obligations] Cведения об обязательствах
     * @param string $ServiceID Идентификатор жилищно-коммунальной услуги
     */
    public function __construct(\gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons $AccountReasons = null, string $AccountNumber = null, string $AccountGUID = null, string $UnifiedAccountNumber = null, array $Obligations = [], string $ServiceID = null)
    {
        $this->AccountReasons = $AccountReasons;
        $this->AccountNumber = $AccountNumber;
        $this->AccountGUID = $AccountGUID;
        $this->UnifiedAccountNumber = $UnifiedAccountNumber;
        $this->Obligations = $Obligations;
        $this->ServiceID = $ServiceID;
    }
}