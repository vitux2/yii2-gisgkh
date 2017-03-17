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
     public $ProtocolMeetingOwners = [];

    /**
     * Идентификатор протокола собрания собственников в ГИС ЖКХ  (Добавление протокола из реестра сведений о голосовании)
     * 
     * @var string[]
     */
     public $ProtocolGUID = [];

    /**
     * @param \gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument\ProtocolMeetingOwners[] $ProtocolMeetingOwners Протокол собрания собственников (Добавление нового протокола)
     * @param string[] $ProtocolGUID Идентификатор протокола собрания собственников в ГИС ЖКХ  (Добавление протокола из реестра сведений о голосовании)
     */
    public function __construct(array $ProtocolMeetingOwners = [], array $ProtocolGUID = [])
    {
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
        $this->ProtocolGUID = $ProtocolGUID;
    }
}