<?php

namespace gisgkh\types\Base;

/**
 * Запрос статуса отправленного сообщения
 */
class getStateRequest
{
    /**
     * Идентификатор сообщения, присвоенный ГИС ЖКХ
     * 
     * @var string
     */
     public $MessageGUID = null;

    /**
     * @param string $MessageGUID Идентификатор сообщения, присвоенный ГИС ЖКХ
     */
    public function __construct(string $MessageGUID = null)
    {
        $this->MessageGUID = $MessageGUID;
    }
}