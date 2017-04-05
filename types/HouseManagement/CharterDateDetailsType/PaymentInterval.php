<?php

namespace gisgkh\types\HouseManagement\CharterDateDetailsType;

/**
 * Срок внесения платы за жилое помещение и (или) коммунальные услуги
 */
class PaymentInterval
{
    /**
     * День месяца (от 1-30)
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Последний день месяца
     * 
     * @var string
     */
     public $LastDay = null;

    /**
     * Текущего месяца


     * 
     * @var string
     */
     public $CurrentMounth = null;

    /**
     * Следующего месяца

     * 
     * @var string
     */
     public $NextMounth = null;

    /**
     * @param string $StartDate День месяца (от 1-30)
     * @param string $LastDay Последний день месяца
     * @param string $CurrentMounth Текущего месяца


     * @param string $NextMounth Следующего месяца

     */
    public function __construct(string $StartDate = null, string $LastDay = null, string $CurrentMounth = null, string $NextMounth = null)
    {
        $this->StartDate = $StartDate;
        $this->LastDay = $LastDay;
        $this->CurrentMounth = $CurrentMounth;
        $this->NextMounth = $NextMounth;
    }
}