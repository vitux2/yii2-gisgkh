<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class BaseServiceType
{
    /**
     * Текущий ДУ
     * 
     * @var string
     */
     public $CurrentDoc = null;

    /**
     * Ссылка на дополнительное соглашение
     * 
     * @var \gisgkh\types\Base\AttachmentType
     */
     public $Agreement = null;

    /**
     * @param string $CurrentDoc Текущий ДУ
     * @param \gisgkh\types\Base\AttachmentType $Agreement Ссылка на дополнительное соглашение
     */
    public function __construct(string $CurrentDoc = null, \gisgkh\types\Base\AttachmentType $Agreement = null)
    {
        $this->CurrentDoc = $CurrentDoc;
        $this->Agreement = $Agreement;
    }
}