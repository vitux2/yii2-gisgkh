<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class ApprovalType
{
    /**
     * Признак утверждения ДУ
     * 
     * @var string
     */
     public $Approval = null;

    /**
     * @param string $Approval Признак утверждения ДУ
     */
    public function __construct(string $Approval = null)
    {
        $this->Approval = $Approval;
    }
}