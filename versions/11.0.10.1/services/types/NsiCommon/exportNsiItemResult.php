<?php

namespace gisgkh\types\NsiCommon;

/**
 * Возврат данных  общесистмного справочника.
 */
class exportNsiItemResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Данные справочника.
     * 
     * @var \gisgkh\types\NsiBase\NsiItemType
     */
     public $NsiItem = null;

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
     * @param \gisgkh\types\NsiBase\NsiItemType $NsiItem Данные справочника.
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\NsiBase\NsiItemType $NsiItem = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.2")
    {
        $this->NsiItem = $NsiItem;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}