<?php

namespace gisgkh\types\NsiCommon;

use gisgkh\types\lib\BaseType;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\Nsi\NsiItemType;

/**
 * Возврат данных  общесистмного справочника
 *
 * @package gisgkh\types\NsiCommon
 */
class exportNsiItemResult extends BaseType
{
    /**
     * @var NsiItemType $NsiItem Данные справочника
     */
    public $NsiItem = null;

    /**
     * @var ErrorMessageType $ErrorMessage
     */
    public $ErrorMessage = null;

    /**
     * @var string $version Версия элемента, начиная с которой поддерживается совместимость
     */
    public $version = null;
}