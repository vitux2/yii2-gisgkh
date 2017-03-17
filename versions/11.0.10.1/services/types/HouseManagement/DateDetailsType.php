<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class DateDetailsType
{
    /**
     * Сроки передачи показаний индивидуальных и общих (квартирных) приборов учета с указанием даты начала и даты окончания периода передачи показаний
     * 
     * @var \gisgkh\types\HouseManagement\DateDetailsType\PeriodMetering
     */
     public $PeriodMetering = null;

    /**
     * Срок представления (выставления) платежных документов для внесения платы за жилое помещение и (или) коммунальные услуги
     * 
     * @var \gisgkh\types\HouseManagement\DateDetailsType\PaymentDocumentInterval
     */
     public $PaymentDocumentInterval = null;

    /**
     * Срок внесения платы за жилое помещение и (или) коммунальные услуги
     * 
     * @var \gisgkh\types\HouseManagement\DateDetailsType\PaymentInterval
     */
     public $PaymentInterval = null;

    /**
     * @param \gisgkh\types\HouseManagement\DateDetailsType\PeriodMetering $PeriodMetering Сроки передачи показаний индивидуальных и общих (квартирных) приборов учета с указанием даты начала и даты окончания периода передачи показаний
     * @param \gisgkh\types\HouseManagement\DateDetailsType\PaymentDocumentInterval $PaymentDocumentInterval Срок представления (выставления) платежных документов для внесения платы за жилое помещение и (или) коммунальные услуги
     * @param \gisgkh\types\HouseManagement\DateDetailsType\PaymentInterval $PaymentInterval Срок внесения платы за жилое помещение и (или) коммунальные услуги
     */
    public function __construct(\gisgkh\types\HouseManagement\DateDetailsType\PeriodMetering $PeriodMetering = null, \gisgkh\types\HouseManagement\DateDetailsType\PaymentDocumentInterval $PaymentDocumentInterval = null, \gisgkh\types\HouseManagement\DateDetailsType\PaymentInterval $PaymentInterval = null)
    {
        $this->PeriodMetering = $PeriodMetering;
        $this->PaymentDocumentInterval = $PaymentDocumentInterval;
        $this->PaymentInterval = $PaymentInterval;
    }
}