<?php

namespace gisgkh\types\lib;
use gisgkh\types\GisgkhType;

/**
 * Вложение
 *
 * @package gisgkh\types\lib
 */
class Attachment extends GisgkhType
{
    /**
     * @var string $AttachmentGUID Идентификатор сохраненного вложения
     */
    public $AttachmentGUID = null;

    /**
     * @param string $guid
     */
    public function __construct($guid = null)
    {
        $this->AttachmentGUID = $guid;
    }
}