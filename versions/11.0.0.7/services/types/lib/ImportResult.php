<?php

namespace gisgkh\types\lib;

/**
 * Статус обработки импорта данных при синхронном обмене
 *
 * @package gisgkh\types\HouseManagement
 */
class ImportResult extends BaseType
{
    /**
     * @var ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     */
    public $ErrorMessage = null;

    /**
     * @var CommonResultType[] $CommonResult Результат выполнения C_UD (массив записей)
     */
    public $CommonResult = [];
}