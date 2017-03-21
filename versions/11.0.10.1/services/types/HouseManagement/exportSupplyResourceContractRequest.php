<?php

namespace gisgkh\types\HouseManagement;

/**
 * Запрос на экспорт договоров ресурсоснабжения
 */
class exportSupplyResourceContractRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Идентификатор договора ресурсоснабжения в ГИС ЖКХ 
     * 
     * @var string[]
     */
     public $ContractRootGUID = null;

    /**
     * Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * 
     * @var string[]
     */
     public $ContractGUID = null;

    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата заключения "С"
     * 
     * @var string
     */
     public $SigningDateStart = null;

    /**
     * Дата заключения "По"
     * 
     * @var string
     */
     public $SigningDateEnd = null;

    /**
     * Адрес дома
Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Предмет договора
     * 
     * @var \gisgkh\types\HouseManagement\exportSupplyResourceContractRequest\ContractSubject[]
     */
     public $ContractSubject = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param string[] $ContractRootGUID Идентификатор договора ресурсоснабжения в ГИС ЖКХ 
     * @param string[] $ContractGUID Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ 
     * @param string [$ContractNumber] Номер договора
     * @param string [$SigningDateStart] Дата заключения "С"
     * @param string [$SigningDateEnd] Дата заключения "По"
     * @param string [$FIASHouseGuid] Адрес дома
Глобальный уникальный идентификатор дома по ФИАС
     * @param \gisgkh\types\HouseManagement\exportSupplyResourceContractRequest\ContractSubject[] [$ContractSubject] Предмет договора
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $ContractRootGUID = null, array $ContractGUID = null, string $ContractNumber = null, string $SigningDateStart = null, string $SigningDateEnd = null, string $FIASHouseGuid = null, array $ContractSubject = null, $version = "10.0.1.1")
    {
        $this->ContractRootGUID = $ContractRootGUID;
        $this->ContractGUID = $ContractGUID;
        $this->ContractNumber = $ContractNumber;
        $this->SigningDateStart = $SigningDateStart;
        $this->SigningDateEnd = $SigningDateEnd;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ContractSubject = $ContractSubject;
        $this->version = $version;
    }
}