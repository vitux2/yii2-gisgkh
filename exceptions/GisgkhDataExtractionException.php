<?php

namespace opengkh\gis\exceptions;

use yii\base\Exception;

/**
 * Обшибка валидации данных, полученных от ГИС ЖКХ
 *
 * @package opengkh\gis\exceptions
 */
class GisgkhDataExtractionException extends GisgkhException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}