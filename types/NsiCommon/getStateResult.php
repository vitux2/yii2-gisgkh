<?php

namespace gisgkh\types\NsiCommon;

/**
 * Возврат статуса отправленного сообщения
 */
class getStateResult extends \gisgkh\types\Base\BaseAsyncResponseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * 
     * 
     * @var \gisgkh\types\NsiBase\NsiItemType
     */
     public $NsiItem = null;

    /**
     * 
     * 
     * @var \gisgkh\types\NsiBase\NsiListType
     */
     public $NsiList = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.2";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\NsiBase\NsiItemType $NsiItem 
     * @param \gisgkh\types\NsiBase\NsiListType $NsiList 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, \gisgkh\types\NsiBase\NsiItemType $NsiItem = null, \gisgkh\types\NsiBase\NsiListType $NsiList = null, $version = "10.0.1.2")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->NsiItem = $NsiItem;
        $this->NsiList = $NsiList;
        $this->version = $version;
    }
}