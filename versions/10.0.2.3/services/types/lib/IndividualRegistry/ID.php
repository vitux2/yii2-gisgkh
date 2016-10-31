<?php

namespace gisgkh\types\lib\IndividualRegistry;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;

/**
 * Удостоверение личности
 *
 * @package gisgkh\types\lib
 */
class ID extends GisgkhType
{
    /**
     * @var nsiRef $Type Документ, удостоверяющий личность (НСИ 95)
     */
    public $Type = null;

    /**
     * @var string $Series Серия документа, от 1 до 45 символов
     */
    public $Series = null;

    /**
     * @var string $Number Номер документа, от 1 до 45 символов
     */
    public $Number = null;

    /**
     * @var string $IssueDate Дата выдачи документа
     */
    public $IssueDate = null;
    /* @return \DateTime */
    public function getIssueDate() { return (!empty($this->IssueDate) ? new \DateTime($this->IssueDate) : null); }
    /* @param \DateTime $issueDate */
    public function setIssueDate(\DateTime $issueDate) { $this->IssueDate = $issueDate->format(DATE_ATOM); }
}