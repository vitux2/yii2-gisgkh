<?php

namespace gisgkh\types\Base;

/**
 * Элемент Fault (для параметра Fault в операции)
 */
class Fault
{
    /**
     * 
     * 
     * @var string
     */
     public $ErrorCode = null;

    /**
     * 
     * 
     * @var string
     */
     public $ErrorMessage = null;

    /**
     * 
     * 
     * @var string
     */
     public $StackTrace = null;

    /**
     * @param string $ErrorCode 
     * @param string [$ErrorMessage] 
     * @param string [$StackTrace] 
     */
    public function __construct(string $ErrorCode = null, string $ErrorMessage = null, string $StackTrace = null)
    {
        $this->ErrorCode = $ErrorCode;
        $this->ErrorMessage = $ErrorMessage;
        $this->StackTrace = $StackTrace;
    }
}