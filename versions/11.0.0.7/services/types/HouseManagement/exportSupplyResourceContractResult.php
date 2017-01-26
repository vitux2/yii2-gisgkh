<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\lib\BaseType;
use gisgkh\types\lib\ErrorMessageType;

/**
 * Результат экспорта договоров ресурсоснабжения
 *
 * В зависимости от успешности операции будет присутствовать один из двух атрибутов
 *
 * @package gisgkh\types\HouseManagement
 */
class exportSupplyResourceContractResult extends BaseType
{
    public $version = null;

    /**
     * @var ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     */
    public $ErrorMessage = null;

    /**
     * @var exportSupplyResourceContractResultType[] $Contract Договор ресурсоснабжения (массив)
     */
    public $Contract = null;
}