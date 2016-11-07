<?php

namespace gisgkh\types\lib;
use gisgkh\types\GisgkhType;

/**
 * Базовый тип ошибки контроля или бизнес-процесса
 *
 * @package gisgkh\types\lib
 */
class ErrorMessageType extends GisgkhType
{
    const ERROR_CODE_INTERNAL_ERROR     = 'EXP001000';
    const ERROR_CODE_NSI_ITEM_NOT_FOUND = 'INT016001';
    const ERROR_CODE_EMPTY_COLLECTION   = 'INT002012';

    /**
     * @var string $ErrorCode Код ошибки
     */
    public $ErrorCode = null;

    /**
     * @var string $Description Описание ошибки
     */
    public $Description = null;

    /**
     * @var string[] $StackTrace StackTrace в случае возникновения исключения
     */
    public $StackTrace = [];
}