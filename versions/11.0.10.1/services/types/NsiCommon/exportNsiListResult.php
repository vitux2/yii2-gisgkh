<?php

namespace gisgkh\types\NsiCommon;

/**
 * Перечень общесистмных справочников с датой последнего изменения каждого из них.
 */
class exportNsiListResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Перечень справочников с указанием даты последнего изменения каждого из них.
     * 
     * @var \gisgkh\types\NsiBase\NsiListType
     */
     public $NsiList = null;

    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.2";

    /**
     * @param \gisgkh\types\NsiBase\NsiListType $NsiList Перечень справочников с указанием даты последнего изменения каждого из них.
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\NsiBase\NsiListType $NsiList = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.2")
    {
        $this->NsiList = $NsiList;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}