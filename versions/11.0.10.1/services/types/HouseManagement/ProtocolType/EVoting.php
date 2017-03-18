<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Заочное голосование с использованием системы
 */
class EVoting
{
    /**
     * Дата и время начала проведения голосования
     * 
     * @var string
     */
     public $EVotingDateBegin = null;

    /**
     * Дата и время окончания проведения голосования
     * 
     * @var string
     */
     public $EVotingDateEnd = null;

    /**
     * Порядок приема оформленных в письменной форме решений собственников
     * 
     * @var string
     */
     public $Discipline = null;

    /**
     * Порядок ознакомления с информацией и (или) материалами, которые будут представлены на данном собрании 
     * 
     * @var string
     */
     public $InfoReview = null;

    /**
     * Прикрепляемые файлы
     * 
     * @var \gisgkh\types\HouseManagement\Attachments[]
     */
     public $Attachments = null;

    /**
     * @param string $EVotingDateBegin Дата и время начала проведения голосования
     * @param string $EVotingDateEnd Дата и время окончания проведения голосования
     * @param string $Discipline Порядок приема оформленных в письменной форме решений собственников
     * @param string $InfoReview Порядок ознакомления с информацией и (или) материалами, которые будут представлены на данном собрании 
     * @param \gisgkh\types\HouseManagement\Attachments[] [$Attachments] Прикрепляемые файлы
     */
    public function __construct(string $EVotingDateBegin = null, string $EVotingDateEnd = null, string $Discipline = null, string $InfoReview = null, array $Attachments = null)
    {
        $this->EVotingDateBegin = $EVotingDateBegin;
        $this->EVotingDateEnd = $EVotingDateEnd;
        $this->Discipline = $Discipline;
        $this->InfoReview = $InfoReview;
        $this->Attachments = $Attachments;
    }
}