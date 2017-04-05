<?php

namespace gisgkh\types\HouseManagement;

/**
 * Юридическое лицо или индивидуальный предприниматель в ДРСО
 */
class DRSORegOrgType
{
    /**
     * 
     * 
     * @var string
     */
     public $orgRootEntityGUID = null;

    /**
     * @param string $orgRootEntityGUID 
     */
    public function __construct(string $orgRootEntityGUID = null)
    {
        $this->orgRootEntityGUID = $orgRootEntityGUID;
    }
}