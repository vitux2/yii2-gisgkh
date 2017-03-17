<?php

namespace gisgkh\types\Base;

/**
 * Базовый тип ответа на запрос статуса
 */
class BaseAsyncResponseType extends \gisgkh\types\Base\BaseType
{
    /**
     * Статус обработки
     * 
     * @var string
     */
     public $RequestState = null;

    /**
     * Идентификатор сообщения, присвоенный ГИС ЖКХ
     * 
     * @var string
     */
     public $MessageGUID = null;

    /**
     * @param string $RequestState Статус обработки
     * @param string $MessageGUID Идентификатор сообщения, присвоенный ГИС ЖКХ
     */
    public function __construct(string $RequestState = null, string $MessageGUID = null)
    {
        $this->RequestState = $RequestState;
        $this->MessageGUID = $MessageGUID;
    }
}