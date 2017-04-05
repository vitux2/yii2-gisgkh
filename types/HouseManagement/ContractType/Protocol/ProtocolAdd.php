<?php

namespace gisgkh\types\HouseManagement\ContractType\Protocol;

/**
 * Протокол открытого конкурса/собрания собственников (Добавление нового протокола)
 */
class ProtocolAdd
{
    /**
     * Номер извещения
     * 
     * @var string
     */
     public $PurchaseNumber = null;

    /**
     * Протокол открытого конкурса
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProtocolOK = null;

    /**
     * Протокол собрания собственников 
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProtocolMeetingOwners = null;

    /**
     * Протокол заседания правления
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProtocolMeetingBoard = null;

    /**
     * Документ, подтверждающий принятое решение органом управления застройщика
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProtocolBuildingOwner = null;

    /**
     * @param string [$PurchaseNumber] Номер извещения
     * @param \gisgkh\types\Base\AttachmentType[] [$ProtocolOK] Протокол открытого конкурса
     * @param \gisgkh\types\Base\AttachmentType[] [$ProtocolMeetingOwners] Протокол собрания собственников 
     * @param \gisgkh\types\Base\AttachmentType[] [$ProtocolMeetingBoard] Протокол заседания правления
     * @param \gisgkh\types\Base\AttachmentType[] [$ProtocolBuildingOwner] Документ, подтверждающий принятое решение органом управления застройщика
     */
    public function __construct(string $PurchaseNumber = null, array $ProtocolOK = null, array $ProtocolMeetingOwners = null, array $ProtocolMeetingBoard = null, array $ProtocolBuildingOwner = null)
    {
        $this->PurchaseNumber = $PurchaseNumber;
        $this->ProtocolOK = $ProtocolOK;
        $this->ProtocolMeetingOwners = $ProtocolMeetingOwners;
        $this->ProtocolMeetingBoard = $ProtocolMeetingBoard;
        $this->ProtocolBuildingOwner = $ProtocolBuildingOwner;
    }
}