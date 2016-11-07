<?php

namespace gisgkh\types\lib\Nsi;

use gisgkh\types\lib\AttachmentType;

/**
 * Составной тип. Наименование и значение поля "Вложение"
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementAttachmentFieldType extends NsiElementFieldType
{
    /**
     * @var AttachmentType $Document Документ
     */
    public $Document = null;
}