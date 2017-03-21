<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип документа ОЧ
 */
class DocumentPortalType
{
    /**
     * Наименование документа
     * 
     * @var string
     */
     public $Name = null;

    /**
     * Номер документа
     * 
     * @var string
     */
     public $DocNumber = null;

    /**
     * Дата принятия документа органом власти
     * 
     * @var string
     */
     public $ApproveDate = null;

    /**
     * Вложение
     * 
     * @var \gisgkh\types\Base\AttachmentType
     */
     public $Attachment = null;

    /**
     * @param string $Name Наименование документа
     * @param string [$DocNumber] Номер документа
     * @param string $ApproveDate Дата принятия документа органом власти
     * @param \gisgkh\types\Base\AttachmentType $Attachment Вложение
     */
    public function __construct(string $Name = null, string $DocNumber = null, string $ApproveDate = null, \gisgkh\types\Base\AttachmentType $Attachment = null)
    {
        $this->Name = $Name;
        $this->DocNumber = $DocNumber;
        $this->ApproveDate = $ApproveDate;
        $this->Attachment = $Attachment;
    }
}