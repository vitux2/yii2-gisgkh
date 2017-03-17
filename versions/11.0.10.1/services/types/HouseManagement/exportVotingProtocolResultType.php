<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportVotingProtocolResultType extends \gisgkh\types\HouseManagement\ProtocolType
{
    /**
     * Статус протокола ОСС
Допустимые значения:
-Created-создан
-Posted-Размещен
-Edited-На изменении
     * 
     * @var string
     */
     public $StatusProtocol = null;

    /**
     * Идентификатор протокола голосования
     * 
     * @var string[]
     */
     public $VotingProtocolGUID = [];

    /**
     * @param string $StatusProtocol Статус протокола ОСС
Допустимые значения:
-Created-создан
-Posted-Размещен
-Edited-На изменении
     * @param string[] $VotingProtocolGUID Идентификатор протокола голосования
     */
    public function __construct(string $StatusProtocol = null, array $VotingProtocolGUID = [])
    {
        $this->StatusProtocol = $StatusProtocol;
        $this->VotingProtocolGUID = $VotingProtocolGUID;
    }
}