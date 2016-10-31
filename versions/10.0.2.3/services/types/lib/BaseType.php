<?php

namespace gisgkh\types\lib;
use gisgkh\types\GisgkhType;

/**
 * Базовый тип бизнес-сообщения с подписью
 *
 * @package gisgkh\types\lib
 */
class BaseType extends GisgkhType
{
    /**
     * @var string $Id
     */
    public $Id = null;

    /**
     * @var \stdClass $Signature
     */
    public $Signature = null;
}