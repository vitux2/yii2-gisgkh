<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на запрос экспорта протоколов ОСС
 */
class exportVotingProtocolResult extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportVotingProtocolResult\VotingProtocol[]
     */
     public $VotingProtocol = [];

    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportVotingProtocolResult\VotingProtocol[] $VotingProtocol 
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $VotingProtocol = [], \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.1")
    {
        $this->VotingProtocol = $VotingProtocol;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}