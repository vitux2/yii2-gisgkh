<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип ответа на запрос создания, редактирования, удаления 
 */
class ResultType
{
    /**
     * Транспортный идентификатор, определенный постащиком информации
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор объекта в ГИС ЖКХ
     * 
     * @var string
     */
     public $UpdateGUID = null;

    /**
     * Идентификатор объекта в ГИС ЖКХ
     * 
     * @var string
     */
     public $GUID = null;

    /**
     * Дата модификации
     * 
     * @var string
     */
     public $UpdateDate = null;

    /**
     * Уникальный номер 
     * 
     * @var string
     */
     public $UniqueNumber = null;

    /**
     * 
     * 
     * @var \gisgkh\types\Base\ErrorMessageType[]
     */
     public $CreateOrUpdateError = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор, определенный постащиком информации
     * @param string $UpdateGUID Идентификатор объекта в ГИС ЖКХ
     * @param string $GUID Идентификатор объекта в ГИС ЖКХ
     * @param string $UpdateDate Дата модификации
     * @param string [$UniqueNumber] Уникальный номер 
     * @param \gisgkh\types\Base\ErrorMessageType[] $CreateOrUpdateError 
     */
    public function __construct(string $TransportGUID = null, string $UpdateGUID = null, string $GUID = null, string $UpdateDate = null, string $UniqueNumber = null, array $CreateOrUpdateError = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->UpdateGUID = $UpdateGUID;
        $this->GUID = $GUID;
        $this->UpdateDate = $UpdateDate;
        $this->UniqueNumber = $UniqueNumber;
        $this->CreateOrUpdateError = $CreateOrUpdateError;
    }
}