<?php

namespace opengkh\gis\models\common;

/**
 * Глобально-уникальный идентификатор GUID
 *
 * Использование:
 * ```
 *  $myGuidString = (string)(new Guid());
 * ```
 *
 * @author Maxim E. Korshunov <korshunov.m.e@gmail.com>
 */
class Guid
{
    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Guid constructor.
     */
    public function __construct()
    {
        $this->value = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return (string)$this;
    }
}