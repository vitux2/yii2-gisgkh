<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на экспорт ПУ
 */
class exportHouseResult extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType
     */
     public $exportHouseResult = null;

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
    public $version = "11.0.0.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportHouseResultType $exportHouseResult 
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\HouseManagement\exportHouseResultType $exportHouseResult = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "11.0.0.1")
    {
        $this->exportHouseResult = $exportHouseResult;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}