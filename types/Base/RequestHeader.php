<?php

namespace gisgkh\types\Base;

/**
 * Заголовок запроса
 */
class RequestHeader extends \gisgkh\types\Base\HeaderType
{
    /**
     * Идентификатор поставщика данных
     * 
     * @var string
     */
     public $SenderID = null;

    /**
     * Идентификатор зарегистрированной организации
     * 
     * @var string
     */
     public $orgPPAGUID = null;

    /**
     * Используется подпись Оператора ИС
     * 
     * @var string
     */
     public $IsOperatorSignature = null;

    /**
     * @param string $SenderID Идентификатор поставщика данных
     * @param string $orgPPAGUID Идентификатор зарегистрированной организации
     * @param string [$IsOperatorSignature] Используется подпись Оператора ИС
     */
    public function __construct(string $SenderID = null, string $orgPPAGUID = null, string $IsOperatorSignature = null)
    {
        $this->SenderID = $SenderID;
        $this->orgPPAGUID = $orgPPAGUID;
        $this->IsOperatorSignature = $IsOperatorSignature;
    }
}