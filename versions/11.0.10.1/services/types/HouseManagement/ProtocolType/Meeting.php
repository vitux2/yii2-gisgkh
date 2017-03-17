<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Очное голосование

 */
class Meeting extends \gisgkh\types\HouseManagement\VoitingType
{
    /**
     * Дата и время проведения собрания
     * 
     * @var string
     */
     public $MeetingDate = null;

    /**
     * Прикрепляемые файлы
     * 
     * @var \gisgkh\types\HouseManagement\Attachments[]
     */
     public $Attachments = [];

    /**
     * @param string $MeetingDate Дата и время проведения собрания
     * @param \gisgkh\types\HouseManagement\Attachments[] $Attachments Прикрепляемые файлы
     */
    public function __construct(string $MeetingDate = null, array $Attachments = [])
    {
        $this->MeetingDate = $MeetingDate;
        $this->Attachments = $Attachments;
    }
}