<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип заголовка
 */
class HeaderType
{
    /**
     * Дата отправки пакета
     * 
     * @var string
     */
     public $Date = null;

    /**
     * Идентификатор сообщения
     * 
     * @var string
     */
     public $MessageGUID = null;

    /**
     * @param string $Date Дата отправки пакета
     * @param string $MessageGUID Идентификатор сообщения
     */
    public function __construct(string $Date = null, string $MessageGUID = null)
    {
        $this->Date = $Date;
        $this->MessageGUID = $MessageGUID;
    }
}