<?php

namespace gisgkh\types\Base;

/**
 * Вложение
 */
class AttachmentType
{
    /**
     * Наименование вложения
     * 
     * @var string
     */
     public $Name = null;

    /**
     * Описание вложения
     * 
     * @var string
     */
     public $Description = null;

    /**
     * Вложение
     * 
     * @var \gisgkh\types\Base\Attachment
     */
     public $Attachment = null;

    /**
     * Хэш-тег вложения по алгоритму ГОСТ в binhex
     * 
     * @var string
     */
     public $AttachmentHASH = null;

    /**
     * @param string $Name Наименование вложения
     * @param string $Description Описание вложения
     * @param \gisgkh\types\Base\Attachment $Attachment Вложение
     * @param string $AttachmentHASH Хэш-тег вложения по алгоритму ГОСТ в binhex
     */
    public function __construct(string $Name = null, string $Description = null, \gisgkh\types\Base\Attachment $Attachment = null, string $AttachmentHASH = null)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Attachment = $Attachment;
        $this->AttachmentHASH = $AttachmentHASH;
    }
}