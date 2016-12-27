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

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->Id = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
}