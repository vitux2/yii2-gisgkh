<?php

namespace gisgkh\types\lib;
use gisgkh\types\GisgkhType;

/**
 * Вложение
 *
 * @package gisgkh\types\lib
 */
class AttachmentType extends GisgkhType
{
    /**
     * @var string $Name Наименование вложения
     */
    public $Name = null;

    /**
     * @var string $Description Описание вложения
     */
    public $Description = null;

    /**
     * @var Attachment $Attachment
     */
    public $Attachment = null;

    /**
     * @var string $AttachmentHASH Хэш-тег вложения по алгоритму ГОСТ
     */
    public $AttachmentHASH = null;
}