<?php

namespace gisgkh\types\HouseManagement\CharterType;

/**
 * Протокол собрания собственников
 */
class MeetingProtocol
{
    /**
     * Протокол собрания собственников (Добавление нового протокола)
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProtocolMeetingOwners = [];

    /**
     * Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     * 
     * @var string[]
     */
     public $VotingProtocolGUID = [];

    /**
     * @param \gisgkh\types\Base\AttachmentType[] $ProtocolMeetingOwners Протокол собрания собственников (Добавление нового протокола)
     * @param string[] $VotingProtocolGUID Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     */
    public function __construct(array $ProtocolMeetingOwners = [], array $VotingProtocolGUID = [])
    {
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
        $this->VotingProtocolGUID = $VotingProtocolGUID;
    }
}