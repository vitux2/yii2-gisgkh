<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип статуса размещения устава в ГИС ЖКХ
 */
class importCharterResultType extends \gisgkh\types\HouseManagement\exportStatusCAChResultType
{
    /**
     * Описание ошибки
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $Error = null;

    /**
     * @param \gisgkh\types\Base\ErrorMessageType [$Error] Описание ошибки
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $Error = null)
    {
        $this->Error = $Error;
    }
}