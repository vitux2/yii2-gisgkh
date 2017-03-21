<?php

namespace gisgkh\types\HouseManagement;

/**
 * Статус обработки импорта данных при синхронном обмене
 */
class ImportResult extends \gisgkh\types\Base\BaseType
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
     * @var \gisgkh\types\HouseManagement\ImportResult\CommonResult[]
     */
     public $CommonResult = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\HouseManagement\ImportResult\CommonResult[] $CommonResult 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $CommonResult = null, $version = "10.0.1.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->CommonResult = $CommonResult;
        $this->version = $version;
    }
}