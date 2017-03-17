<?php

namespace gisgkh\types\HouseManagement\ContractType;

/**
 * Дополнительное соглашение
 */
class AgreementAttachment extends \gisgkh\types\Base\AttachmentType
{
    /**
     * Реквизиты дополнительного соглашения
     * 
     * @var \gisgkh\types\HouseManagement\ImprintAgreementType
     */
     public $ImprintAgreement = null;

    /**
     * @param \gisgkh\types\HouseManagement\ImprintAgreementType $ImprintAgreement Реквизиты дополнительного соглашения
     */
    public function __construct(\gisgkh\types\HouseManagement\ImprintAgreementType $ImprintAgreement = null)
    {
        $this->ImprintAgreement = $ImprintAgreement;
    }
}