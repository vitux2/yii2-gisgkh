<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Заочное голосование (опросным путем)
 */
class AVoting
{
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
     public $Attachments = [];

    /**
     * @param string $AVotingDate Дата окончания приема решений
     * @param string $ResolutionPlace Место приема решения
     * @param \gisgkh\types\HouseManagement\Attachments[] $Attachments Прикрепляемые файлы
     */
    public function __construct(string $AVotingDate = null, string $ResolutionPlace = null, array $Attachments = [])
    {
        $this->AVotingDate = $AVotingDate;
        $this->ResolutionPlace = $ResolutionPlace;
        $this->Attachments = $Attachments;
    }
}