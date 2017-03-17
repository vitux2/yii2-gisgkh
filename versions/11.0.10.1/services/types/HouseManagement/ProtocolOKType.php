<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class ProtocolOKType
{
    /**
     * Идентификатор в ГИС ЖКХ (ссылка на подсистему голосования)
     * 
     * @var string[]
     */
     public $ProtocolGUID = [];

    /**
     * Приложенный документ
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $AttachmentProtocol = [];

    /**
     * @param string[] $ProtocolGUID Идентификатор в ГИС ЖКХ (ссылка на подсистему голосования)
     * @param \gisgkh\types\Base\AttachmentType[] [$AttachmentProtocol] Приложенный документ
     */
    public function __construct(array $ProtocolGUID = [], array $AttachmentProtocol = [])
    {
        $this->ProtocolGUID = $ProtocolGUID;
        $this->AttachmentProtocol = $AttachmentProtocol;
    }
}