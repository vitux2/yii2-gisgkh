<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportCAChRequestCriteriaType
{
    /**
     * Корневой идентификатор устава (не меняется от версии к версии)
     * 
     * @var string
     */
     public $CharterGUID = null;

    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * Идентификатор УО в ГИС ЖКХ
     * 
     * @var string
     */
     public $UOGUID = null;

    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Дата заключения ДУ
     * 
     * @var string
     */
     public $SigningDate = null;

    /**
     * Настройка для экспорта только крайней версии ДУ/устава. Если элемент не указан, экспорту подлежат все версии документа 
     * 
     * @var string
     */
     public $LastVersionOnly = null;

    /**
     * @param string $CharterGUID Корневой идентификатор устава (не меняется от версии к версии)
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param string $UOGUID Идентификатор УО в ГИС ЖКХ
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$SigningDate] Дата заключения ДУ
     * @param string [$LastVersionOnly] Настройка для экспорта только крайней версии ДУ/устава. Если элемент не указан, экспорту подлежат все версии документа 
     */
    public function __construct(string $CharterGUID = null, string $ContractGUID = null, string $ContractVersionGUID = null, string $CharterVersionGUID = null, string $UOGUID = null, string $FIASHouseGuid = null, string $SigningDate = null, string $LastVersionOnly = null)
    {
        $this->CharterGUID = $CharterGUID;
        $this->ContractGUID = $ContractGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->UOGUID = $UOGUID;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->SigningDate = $SigningDate;
        $this->LastVersionOnly = $LastVersionOnly;
    }
}