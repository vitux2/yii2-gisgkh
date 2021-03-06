<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType\Contract;

/**
 * Информация о расторжении ДУ
 */
class Terminate extends \gisgkh\types\HouseManagement\TerminateType
{
    /**
     * Ссылка на НСИ "54	Причина расторжения договор" (реестровый номер 54)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ReasonRef = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $ReasonRef Ссылка на НСИ "54	Причина расторжения договор" (реестровый номер 54)
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $ReasonRef = null)
    {
        $this->ReasonRef = $ReasonRef;
    }
}