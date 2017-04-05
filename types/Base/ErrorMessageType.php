<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип ошибки контроля или бизнес-процесса
 */
class ErrorMessageType
{
    /**
     * Код ошибки
     * 
     * @var string
     */
     public $ErrorCode = null;

    /**
     * Описание ошибки
     * 
     * @var string
     */
     public $Description = null;

    /**
     * StackTrace в случае возникновения исключения
     * 
     * @var string
     */
     public $StackTrace = null;

    /**
     * @param string $ErrorCode Код ошибки
     * @param string $Description Описание ошибки
     * @param string [$StackTrace] StackTrace в случае возникновения исключения
     */
    public function __construct(string $ErrorCode = null, string $Description = null, string $StackTrace = null)
    {
        $this->ErrorCode = $ErrorCode;
        $this->Description = $Description;
        $this->StackTrace = $StackTrace;
    }
}