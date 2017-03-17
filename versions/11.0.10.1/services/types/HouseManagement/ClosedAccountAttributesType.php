<?php

namespace gisgkh\types\HouseManagement;

/**
 * Параметры закрытого ЛС
 */
class ClosedAccountAttributesType
{
    /**
     * Причина закрытия (НСИ 22) 
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $CloseReason = null;

    /**
     * Дата закрытия
     * 
     * @var string
     */
     public $CloseDate = null;

    /**
     * Примечание
     * 
     * @var string
     */
     public $Description = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $CloseReason Причина закрытия (НСИ 22) 
     * @param string $CloseDate Дата закрытия
     * @param string [$Description] Примечание
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $CloseReason = null, string $CloseDate = null, string $Description = null)
    {
        $this->CloseReason = $CloseReason;
        $this->CloseDate = $CloseDate;
        $this->Description = $Description;
    }
}