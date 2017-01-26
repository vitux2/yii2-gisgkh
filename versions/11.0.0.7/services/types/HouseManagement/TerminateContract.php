<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\lib\Nsi\nsiRef;

/**
 * Информация о расторжении договора ресурсоснабжения
 *
 * @package gisgkh\types\HouseManagement
 */
class TerminateContract extends TerminateType
{
    /**
     * @var nsiRef $ReasonRef Ссылка на НСИ "54	Причина расторжения договора" (реестровый номер 54)
     */
    public $ReasonRef = null;
}