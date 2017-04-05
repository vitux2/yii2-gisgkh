<?php

namespace gisgkh\types\HouseManagement;

/**
 * Удостоверение личности
 */
class VotingInitiatorIndID
{
    /**
     * Документ, удостоверяющий личность  (НСИ 95)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $Type = null;

    /**
     * Серия документа
     * 
     * @var string
     */
     public $Series = null;

    /**
     * Номер документа
     * 
     * @var string
     */
     public $Number = null;

    /**
     * Дата выдачи документа
     * 
     * @var string
     */
     public $IssueDate = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $Type Документ, удостоверяющий личность  (НСИ 95)
     * @param string [$Series] Серия документа
     * @param string $Number Номер документа
     * @param string [$IssueDate] Дата выдачи документа
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $Type = null, string $Series = null, string $Number = null, string $IssueDate = null)
    {
        $this->Type = $Type;
        $this->Series = $Series;
        $this->Number = $Number;
        $this->IssueDate = $IssueDate;
    }
}