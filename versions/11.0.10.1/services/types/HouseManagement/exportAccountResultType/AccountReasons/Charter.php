<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType\AccountReasons;

/**
 * 
 */
class Charter
{
    /**
     * Корневой идентификатор устава (не меняется от версии к версии)
     * 
     * @var string
     */
     public $CharterGUID = null;

    /**
     * @param string $CharterGUID Корневой идентификатор устава (не меняется от версии к версии)
     */
    public function __construct(string $CharterGUID = null)
    {
        $this->CharterGUID = $CharterGUID;
    }
}