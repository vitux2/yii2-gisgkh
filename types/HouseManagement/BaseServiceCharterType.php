<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class BaseServiceCharterType
{
    /**
     * Текущий устав
     * 
     * @var string
     */
     public $CurrentCharter = null;

    /**
     * Ссылка на протокол собрания собственников 
     * 
     * @var \gisgkh\types\Base\AttachmentType
     */
     public $ProtocolMeetingOwners = null;

    /**
     * @param string $CurrentCharter Текущий устав
     * @param \gisgkh\types\Base\AttachmentType $ProtocolMeetingOwners Ссылка на протокол собрания собственников 
     */
    public function __construct(string $CurrentCharter = null, \gisgkh\types\Base\AttachmentType $ProtocolMeetingOwners = null)
    {
        $this->CurrentCharter = $CurrentCharter;
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
    }
}