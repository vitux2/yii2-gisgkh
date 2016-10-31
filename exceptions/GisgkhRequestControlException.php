<?php

namespace startuplab\gisgkh\common\exceptions;

use gisgkh\types\lib\ErrorMessageType;

/**
 * Ошибка контроля или бизнес-процессов
 *
 * @package startuplab\gisgkh\common\exceptions
 */
class GisgkhRequestControlException extends GisgkhException
{
    public function __construct(ErrorMessageType $errorMessage)
    {
        parent::__construct($errorMessage->Description, $errorMessage->ErrorCode);
    }
}