<?php

namespace gisgkh\types\Base;

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
     * @var \gisgkh\types\Base\CommonResultType[]
     */
     public $CommonResult = null;

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\Base\CommonResultType[] $CommonResult 
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $CommonResult = null)
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->CommonResult = $CommonResult;
    }
}