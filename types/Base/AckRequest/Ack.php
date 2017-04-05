<?php

namespace gisgkh\types\Base\AckRequest;

/**
 * Квитанция
 */
class Ack
{
    /**
     * Идентификатор сообщения, присвоенный ГИС ЖКХ
     * 
     * @var string
     */
     public $MessageGUID = null;

    /**
     * Идентификатор сообщения, присвоенный поставщиком
     * 
     * @var string
     */
     public $RequesterMessageGUID = null;

    /**
     * @param string $MessageGUID Идентификатор сообщения, присвоенный ГИС ЖКХ
     * @param string $RequesterMessageGUID Идентификатор сообщения, присвоенный поставщиком
     */
    public function __construct(string $MessageGUID = null, string $RequesterMessageGUID = null)
    {
        $this->MessageGUID = $MessageGUID;
        $this->RequesterMessageGUID = $RequesterMessageGUID;
    }
}