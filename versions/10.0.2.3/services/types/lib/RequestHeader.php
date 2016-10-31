<?php

namespace gisgkh\types\lib;

/**
 * Заголовок запроса
 *
 * @package gisgkh\types\lib
 */
class RequestHeader extends HeaderType
{
    /**
     * @var string $SenderID Идентификатор поставщика данных
     * - GUIDType
     */
    public $SenderID = null;

    /**
     * @var string $orgPPAGUID Идентификатор зарегистрированной организации
     */
    public $orgPPAGUID = null;

    /**
     * @var string $IsOperatorSignature Используется подпись Оператора ИС
     * - xs:boolean
     */
    public $IsOperatorSignature = 'true';

    /**
     * RequestHeader constructor.
     *
     * @param string|null $SenderID
     * @param string|null $orgPPAGUID
     * @param \DateTime|null $date
     * @param string|null $messageGUID
     */
    public function __construct($SenderID = null, $orgPPAGUID = null, \DateTime $date = null, $messageGUID = null)
    {
        parent::__construct($date, $messageGUID);

        $this->SenderID = $SenderID;
        $this->orgPPAGUID = $orgPPAGUID;
    }
}