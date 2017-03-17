<?php

namespace gisgkh\types\HouseManagement\importContractRequest\Contract;

/**
 * Расторжение ДУ
 */
class TerminateContract extends \gisgkh\types\HouseManagement\TerminateType
{
    /**
     * Ссылка на НСИ "54	Причина расторжения договор" (реестровый номер 54)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ReasonRef = null;

    /**
     * Основание
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $TerminateAttachment = [];

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $ReasonRef Ссылка на НСИ "54	Причина расторжения договор" (реестровый номер 54)
     * @param \gisgkh\types\Base\AttachmentType[] $TerminateAttachment Основание
     * @param string $ContractVersionGUID Идентификатор версии договора
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $ReasonRef = null, array $TerminateAttachment = [], string $ContractVersionGUID = null)
    {
        $this->ReasonRef = $ReasonRef;
        $this->TerminateAttachment = $TerminateAttachment;
        $this->ContractVersionGUID = $ContractVersionGUID;
    }
}