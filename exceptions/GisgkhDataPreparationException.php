<?php

namespace opengkh\gis\exceptions;

/**
 * Обшибка валидации данных, подгатавливаемых для отправки в ГИС ЖКХ
 *
 * @package opengkh\gis\exceptions
 */
class GisgkhDataPreparationException extends GisgkhException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}