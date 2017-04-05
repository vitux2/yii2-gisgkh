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
     public $ProtocolMeetingOwners = null;

    /**
     * Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     * 
     * @var string[]
     */
     public $VotingProtocolGUID = null;

    /**
     * @param \gisgkh\types\Base\AttachmentType[] $ProtocolMeetingOwners Протокол собрания собственников (Добавление нового протокола)
     * @param string[] $VotingProtocolGUID Идентификатор протокола голосования (Добавление протокола из реестра сведений о голосовании)
     */
    public function __construct(array $ProtocolMeetingOwners = null, array $VotingProtocolGUID = null)
    {
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
        $this->VotingProtocolGUID = $VotingProtocolGUID;
    }
}