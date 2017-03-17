<?php

namespace gisgkh\types\Base;

/**
 * Вложение
 */
class Attachment
{
    /**
     * Идентификатор сохраненного вложения
     * 
     * @var string
     */
     public $AttachmentGUID = null;

    /**
     * @param string $AttachmentGUID Идентификатор сохраненного вложения
     */
    public function __construct(string $AttachmentGUID = null)
    {
        $this->AttachmentGUID = $AttachmentGUID;
    }
}