<?php

namespace gisgkh\types\Base;

/**
 * Возврат квитанции приема сообщения
 */
class AckRequest
{
    /**
     * Квитанция
     * 
     * @var \gisgkh\types\Base\AckRequest\Ack
     */
     public $Ack = null;

    /**
     * @param \gisgkh\types\Base\AckRequest\Ack $Ack Квитанция
     */
    public function __construct(\gisgkh\types\Base\AckRequest\Ack $Ack = null)
    {
        $this->Ack = $Ack;
    }
}