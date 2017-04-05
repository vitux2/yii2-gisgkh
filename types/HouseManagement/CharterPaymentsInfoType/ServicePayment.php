<?php

namespace gisgkh\types\HouseManagement\CharterPaymentsInfoType;

/**
 * Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме
 */
class ServicePayment
{
    /**
     * Работа/услуга организации (НСИ №59)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $Service = null;

    /**
     * Размер платы (цена) за услуги, работы по управлению МКД
     * 
     * @var string
     */
     public $ServicePaymentSize = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $Service Работа/услуга организации (НСИ №59)
     * @param string $ServicePaymentSize Размер платы (цена) за услуги, работы по управлению МКД
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $Service = null, string $ServicePaymentSize = null)
    {
        $this->Service = $Service;
        $this->ServicePaymentSize = $ServicePaymentSize;
    }
}