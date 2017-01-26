<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\AttachmentType;

/**
 * Реквизиты догвора, который не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_IsContract extends GisgkhType
{

    /**
     * @var string $ContractNumber Номер договора
     */
    public $ContractNumber = null;

    /**
     * @var string $SigningDate Дата заключения
     */
    public $SigningDate = null;
    /* @return \DateTime */
    public function getSigningDate() { return new \DateTime($this->SigningDate); }
    /* @param \DateTime $signingDate */
    public function setSigningDate(\DateTime $signingDate) { $this->SigningDate = $signingDate->format('Y-m-d'); }

    /**
     * @var string $EffectiveDate Дата вступления в силу
     */
    public $EffectiveDate = null;
    /* @return \DateTime */
    public function getEffectiveDate() { return new \DateTime($this->EffectiveDate); }
    /* @param \DateTime $effectiveDate */
    public function setEffectiveDate(\DateTime $effectiveDate) { $this->EffectiveDate = $effectiveDate->format('Y-m-d'); }

    /**
     * @var AttachmentType[] $ContractAttachment Договор ресурсоснабжения и приложения к договору
     */
    public $ContractAttachment = null;

    /**
     * SupplyResourceContractType_IsContract constructor.
     * @param string|null $number
     * @param \DateTime|null $signingDate
     * @param \DateTime|null $effectiveDate
     * @param AttachmentType[]|null $attachments
     */
    public function __construct($number = null, \DateTime $signingDate = null, \DateTime $effectiveDate = null, $attachments = null)
    {
        //parent::__construct();
        if (!empty($number))
            $this->ContractNumber = $number;
        if (!empty($signingDate))
            $this->setSigningDate($signingDate);
        if (!empty($effectiveDate))
            $this->setEffectiveDate($effectiveDate);
        if (!empty($attachments))
            $this->ContractAttachment = $attachments;
    }

}