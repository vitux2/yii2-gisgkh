<?php

namespace gisgkh\types\HouseManagement\exportStatusCAChResultType;

/**
 * Управляемый объект
 */
class ContractObject
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Статус управляемого объекта:
Project-Проект
ApprovalProcess-На утверждении
Rejected-Отклонен
Approved-Утвержден
Locked-Заблокирован
Annul-Сведения аннулированы

     * 
     * @var string
     */
     public $ManagedObjectStatus = null;

    /**
     * Признак расхождения с Реестром инфомрации об управлении МКД
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsConflicted
     */
     public $IsConflicted = null;

    /**
     * Признак заблокированного дома
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsBlocked
     */
     public $IsBlocked = null;

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string $ManagedObjectStatus Статус управляемого объекта:
Project-Проект
ApprovalProcess-На утверждении
Rejected-Отклонен
Approved-Утвержден
Locked-Заблокирован
Annul-Сведения аннулированы

     * @param \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsConflicted [$IsConflicted] Признак расхождения с Реестром инфомрации об управлении МКД
     * @param \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsBlocked [$IsBlocked] Признак заблокированного дома
     */
    public function __construct(string $FIASHouseGuid = null, string $ManagedObjectStatus = null, \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsConflicted $IsConflicted = null, \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject\IsBlocked $IsBlocked = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ManagedObjectStatus = $ManagedObjectStatus;
        $this->IsConflicted = $IsConflicted;
        $this->IsBlocked = $IsBlocked;
    }
}