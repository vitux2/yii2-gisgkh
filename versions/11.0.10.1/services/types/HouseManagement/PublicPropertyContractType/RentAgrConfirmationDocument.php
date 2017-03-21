<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType;

/**
 * Протокол собрания собственников  
 */
class RentAgrConfirmationDocument
{
    /**
     * Протокол собрания собственников (Добавление нового протокола)
     * 
     * @var \gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument\ProtocolMeetingOwners[]
     */
     public $ProtocolMeetingOwners = null;

    /**
     * Идентификатор протокола собрания собственников в ГИС ЖКХ  (Добавление протокола из реестра сведений о голосовании)
     * 
     * @var string[]
     */
     public $ProtocolGUID = null;

    /**
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument\ProtocolMeetingOwners[] $ProtocolMeetingOwners Протокол собрания собственников (Добавление нового протокола)
     * @param string[] $ProtocolGUID Идентификатор протокола собрания собственников в ГИС ЖКХ  (Добавление протокола из реестра сведений о голосовании)
     */
    public function __construct(array $ProtocolMeetingOwners = null, array $ProtocolGUID = null)
    {
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
        $this->ProtocolGUID = $ProtocolGUID;
    }
}