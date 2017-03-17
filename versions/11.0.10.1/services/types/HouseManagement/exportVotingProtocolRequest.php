<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт протоколов ОСС
 */
class exportVotingProtocolRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Идентификатор протокола голосования
     * 
     * @var string[]
     */
     public $VotingProtocolGUID = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string[] $VotingProtocolGUID Идентификатор протокола голосования
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $FIASHouseGuid = null, array $VotingProtocolGUID = [], $version = "10.0.1.1")
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->VotingProtocolGUID = $VotingProtocolGUID;
        $this->version = $version;
    }
}