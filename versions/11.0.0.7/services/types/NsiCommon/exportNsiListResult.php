<?php

namespace gisgkh\types\NsiCommon;

use gisgkh\types\lib\BaseType;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\Nsi\NsiListType;

/**
 * Перечень общесистмных справочников с датой последнего изменения каждого из них
 *
 * @package gisgkh\types\NsiCommon
 */
class exportNsiListResult extends BaseType
{
    /**
     * @var NsiListType $NsiList Перечень справочников с указанием даты последнего изменения каждого из них
     */
    public $NsiList = null;

    /**
     * @var ErrorMessageType $ErrorMessage
     */
    public $ErrorMessage = null;

    /**
     * @var string $version Версия элемента, начиная с которой поддерживается совместимость
     */
    public $version = null;
}