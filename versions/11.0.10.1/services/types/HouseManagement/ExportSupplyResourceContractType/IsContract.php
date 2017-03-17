<?php

namespace gisgkh\types\HouseManagement\ExportSupplyResourceContractType;

/**
 * Договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
 */
class IsContract
{
    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата заключения
     * 
     * @var string
     */
     public $SigningDate = null;

    /**
     * Дата вступления в силу
     * 
     * @var string
     */
     public $EffectiveDate = null;

    /**
     * Договор ресурсоснабжения и приложения к договору
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ContractAttachment = [];

    /**
     * @param string $ContractNumber Номер договора
     * @param string $SigningDate Дата заключения
     * @param string $EffectiveDate Дата вступления в силу
     * @param \gisgkh\types\Base\AttachmentType[] [$ContractAttachment] Договор ресурсоснабжения и приложения к договору
     */
    public function __construct(string $ContractNumber = null, string $SigningDate = null, string $EffectiveDate = null, array $ContractAttachment = [])
    {
        $this->ContractNumber = $ContractNumber;
        $this->SigningDate = $SigningDate;
        $this->EffectiveDate = $EffectiveDate;
        $this->ContractAttachment = $ContractAttachment;
    }
}