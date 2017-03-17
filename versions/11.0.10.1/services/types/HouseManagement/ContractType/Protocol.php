<?php

namespace gisgkh\types\HouseManagement\ContractType;

/**
 * Сведения о протоколе открытого конкурса/собрания собственников
 */
class Protocol
{
    /**
     * Протокол открытого конкурса/собрания собственников (Добавление нового протокола)
     * 
     * @var \gisgkh\types\HouseManagement\ContractType\Protocol\ProtocolAdd
     */
     public $ProtocolAdd = null;

    /**
     * Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     * 
     * @var string[]
     */
     public $VotingProtocolGUID = [];

    /**
     * @param \gisgkh\types\HouseManagement\ContractType\Protocol\ProtocolAdd $ProtocolAdd Протокол открытого конкурса/собрания собственников (Добавление нового протокола)
     * @param string[] $VotingProtocolGUID Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     */
    public function __construct(\gisgkh\types\HouseManagement\ContractType\Protocol\ProtocolAdd $ProtocolAdd = null, array $VotingProtocolGUID = [])
    {
        $this->ProtocolAdd = $ProtocolAdd;
        $this->VotingProtocolGUID = $VotingProtocolGUID;
    }
}