<?php

namespace gisgkh\types\HouseManagement\PublicPropertyContractType\RentAgrConfirmationDocument;

/**
 * Протокол собрания собственников (Добавление нового протокола)
 */
class ProtocolMeetingOwners
{
    /**
     * Номер протокола
     * 
     * @var string
     */
     public $ProtocolNum = null;

    /**
     * Дата составления протокола
     * 
     * @var string
     */
     public $ProtocolDate = null;

    /**
     * Документы, подтверждающие полномочия заключать договор
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $TrustDocAttachment = null;

    /**
     * @param string $ProtocolNum Номер протокола
     * @param string $ProtocolDate Дата составления протокола
     * @param \gisgkh\types\Base\AttachmentType[] $TrustDocAttachment Документы, подтверждающие полномочия заключать договор
     */
    public function __construct(string $ProtocolNum = null, string $ProtocolDate = null, array $TrustDocAttachment = null)
    {
        $this->ProtocolNum = $ProtocolNum;
        $this->ProtocolDate = $ProtocolDate;
        $this->TrustDocAttachment = $TrustDocAttachment;
    }
}