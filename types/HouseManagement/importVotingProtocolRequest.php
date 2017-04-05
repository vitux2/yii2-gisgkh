<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт протокола ООС (протокол общего собрания собственников)
 */
class importVotingProtocolRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор протокола ОСС в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ProtocolGUID = null;

    /**
     * Протокол ОСС
     * 
     * @var \gisgkh\types\HouseManagement\importVotingProtocolRequest\Protocol
     */
     public $Protocol = null;

    /**
     * Разместить протокол ОСС
     * 
     * @var string
     */
     public $Placing = null;

    /**
     * Отменить последние изменения
     * 
     * @var string
     */
     public $Revert = null;

    /**
     * Удалить  протокол ОСС
     * 
     * @var string
     */
     public $Delete = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$ProtocolGUID] Идентификатор протокола ОСС в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\importVotingProtocolRequest\Protocol $Protocol Протокол ОСС
     * @param string $Placing Разместить протокол ОСС
     * @param string $Revert Отменить последние изменения
     * @param string $Delete Удалить  протокол ОСС
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $TransportGUID = null, string $ProtocolGUID = null, \gisgkh\types\HouseManagement\importVotingProtocolRequest\Protocol $Protocol = null, string $Placing = null, string $Revert = null, string $Delete = null, $version = "10.0.1.1")
    {
        $this->TransportGUID = $TransportGUID;
        $this->ProtocolGUID = $ProtocolGUID;
        $this->Protocol = $Protocol;
        $this->Placing = $Placing;
        $this->Revert = $Revert;
        $this->Delete = $Delete;
        $this->version = $version;
    }
}