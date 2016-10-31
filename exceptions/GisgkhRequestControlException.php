<?php

namespace opengkh\gis\exceptions;

use gisgkh\types\lib\ErrorMessageType;

/**
 * Ошибка контроля или бизнес-процессов
 *
 * @package opengkh\gis\exceptions
 */
class GisgkhRequestControlException extends GisgkhException
{
    public function __construct(ErrorMessageType $errorMessage)
    {
        parent::__construct($errorMessage->Description, $errorMessage->ErrorCode);
    }
}