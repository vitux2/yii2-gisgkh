<?php

namespace startuplab\gisgkh\common\exceptions;

/**
 * Обшибка валидации данных, подгатавливаемых для отправки в ГИС ЖКХ
 *
 * @package startuplab\gisgkh\common\exceptions
 */
class GisgkhDataPreparationException extends GisgkhException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}