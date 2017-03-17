<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на экспорт ДУ/уставов
 */
class exportCAChResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Экспорт ДУ/уставов
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType[]
     */
     public $exportCACh = [];

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
     * @param \gisgkh\types\HouseManagement\exportCAChResultType[] $exportCACh Экспорт ДУ/уставов
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $exportCACh = [], \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "10.0.1.1")
    {
        $this->exportCACh = $exportCACh;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}