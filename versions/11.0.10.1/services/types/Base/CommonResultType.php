<?php

namespace gisgkh\types\Base;

/**
 * Результат выполнения C_UD
 */
class CommonResultType
{
    /**
     * Идентификатор создаваемой/изменяемой сущности
     * 
     * @var string
     */
     public $GUID = null;

    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Уникальный реестровый номер
     * 
     * @var string
     */
     public $UniqueNumber = null;

    /**
     * Дата модификации
     * 
     * @var string
     */
     public $UpdateDate = null;

    /**
     * Описание ошибки
     * 
     * @var \gisgkh\types\Base\CommonResultType\Error[]
     */
     public $Error = null;

    /**
     * @param string [$GUID] Идентификатор создаваемой/изменяемой сущности
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$UniqueNumber] Уникальный реестровый номер
     * @param string $UpdateDate Дата модификации
     * @param \gisgkh\types\Base\CommonResultType\Error[] $Error Описание ошибки
     */
    public function __construct(string $GUID = null, string $TransportGUID = null, string $UniqueNumber = null, string $UpdateDate = null, array $Error = null)
    {
        $this->GUID = $GUID;
        $this->TransportGUID = $TransportGUID;
        $this->UniqueNumber = $UniqueNumber;
        $this->UpdateDate = $UpdateDate;
        $this->Error = $Error;
    }
}