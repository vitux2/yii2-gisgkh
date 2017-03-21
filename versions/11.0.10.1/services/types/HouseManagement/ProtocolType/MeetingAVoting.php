<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Очное-заочное голосование

 */
class MeetingAVoting
{
    /**
     * Дата и время проведения собрания
     * 
     * @var string
     */
     public $MeetingDate = null;

    /**
     * Место проведения собрания 
     * 
     * @var string
     */
     public $VotingPlace = null;

    /**
     * Дата окончания приема решений
     * 
     * @var string
     */
     public $AVotingDate = null;

    /**
     * Место приема решения
     * 
     * @var string
     */
     public $ResolutionPlace = null;

    /**
     * Прикрепляемые файлы
     * 
     * @var \gisgkh\types\HouseManagement\Attachments[]
     */
     public $Attachments = null;

    /**
     * @param string $MeetingDate Дата и время проведения собрания
     * @param string $VotingPlace Место проведения собрания 
     * @param string $AVotingDate Дата окончания приема решений
     * @param string $ResolutionPlace Место приема решения
     * @param \gisgkh\types\HouseManagement\Attachments[] $Attachments Прикрепляемые файлы
     */
    public function __construct(string $MeetingDate = null, string $VotingPlace = null, string $AVotingDate = null, string $ResolutionPlace = null, array $Attachments = null)
    {
        $this->MeetingDate = $MeetingDate;
        $this->VotingPlace = $VotingPlace;
        $this->AVotingDate = $AVotingDate;
        $this->ResolutionPlace = $ResolutionPlace;
        $this->Attachments = $Attachments;
    }
}