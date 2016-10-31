<?php

namespace startuplab\gisgkh\common\exceptions;

use yii\base\Exception;

/**
 * Обшибка валидации данных, полученных от ГИС ЖКХ
 *
 * @package startuplab\gisgkh\common\exceptions
 */
class GisgkhDataExtractionException extends GisgkhException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}