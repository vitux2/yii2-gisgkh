<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на экспорт ДУ/уставов
 */
class exportStatusCAChResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Статус ДУ/уставов
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChResultType[]
     */
     public $exportStatusCACh = null;

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
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportStatusCAChResultType[] [$exportStatusCACh] Статус ДУ/уставов
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $exportStatusCACh = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.1")
    {
        $this->exportStatusCACh = $exportStatusCACh;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}