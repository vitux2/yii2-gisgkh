<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Наименование и значение поля "Вложение"
 */
class NsiElementAttachmentFieldType extends \gisgkh\types\NsiBase\NsiElementFieldType
{
    /**
     * Документ
     * 
     * @var \gisgkh\types\Base\AttachmentType
     */
     public $Document = null;

    /**
     * @param \gisgkh\types\Base\AttachmentType $Document Документ
     */
    public function __construct(\gisgkh\types\Base\AttachmentType $Document = null)
    {
        $this->Document = $Document;
    }
}