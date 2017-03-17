<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Charter;

/**
 * Объект управления
 */
class ContractObject extends \gisgkh\types\HouseManagement\ManageObjectType
{
    /**
     * Идентификатор версии объекта управления  в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractObjectVersionGUID = null;

    /**
     * Основание
     * 
     * @var \gisgkh\types\HouseManagement\BaseServiceType
     */
     public $BaseMService = null;

    /**
     * Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\HouseService[]
     */
     public $HouseService = [];

    /**
     * Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\AddService[]
     */
     public $AddService = [];

    /**
     * Сведения об исключении объекта управления из устава
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\Exclusion
     */
     public $Exclusion = null;

    /**
     * Статус в ГИС ЖКХ
Допустимые значения:
Project-Проект
ApprovalProcess-На утверждении
Rejected-Отклонен
Approved-Утвержден
Locked-Заблокирован
     * 
     * @var string
     */
     public $StatusObject = null;

    /**
     * Управление многоквартирным домом осуществляется управляющей организацией по договору управления
     * 
     * @var string
     */
     public $IsManagedByContract = null;

    /**
     * @param string $ContractObjectVersionGUID Идентификатор версии объекта управления  в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\BaseServiceType $BaseMService Основание
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\HouseService[] [$HouseService] Виды КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\AddService[] [$AddService] Дополнительные услуги. Ссылка на НСИ "Дополнительные услуги" (реестровый номер 1) 
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\Exclusion [$Exclusion] Сведения об исключении объекта управления из устава
     * @param string [$StatusObject] Статус в ГИС ЖКХ
Допустимые значения:
Project-Проект
ApprovalProcess-На утверждении
Rejected-Отклонен
Approved-Утвержден
Locked-Заблокирован
     * @param string [$IsManagedByContract] Управление многоквартирным домом осуществляется управляющей организацией по договору управления
     */
    public function __construct(string $ContractObjectVersionGUID = null, \gisgkh\types\HouseManagement\BaseServiceType $BaseMService = null, array $HouseService = [], array $AddService = [], \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject\Exclusion $Exclusion = null, string $StatusObject = null, string $IsManagedByContract = null)
    {
        $this->ContractObjectVersionGUID = $ContractObjectVersionGUID;
        $this->BaseMService = $BaseMService;
        $this->HouseService = $HouseService;
        $this->AddService = $AddService;
        $this->Exclusion = $Exclusion;
        $this->StatusObject = $StatusObject;
        $this->IsManagedByContract = $IsManagedByContract;
    }
}