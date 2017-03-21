<?php

namespace gisgkh\types\HouseManagement\ContractPaymentsInfoType;

/**
 * Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме/Информация о размере платы за содержание жилого помещения, установленном по результатам открытого конкурса по отбору управляющей организации для управления многоквартирным домом
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
     * Размер платы (цены, тарифа) за работы (услуги)/Размер платы за работы (услуги), руб.
     * 
     * @var string
     */
     public $ServicePaymentSize = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $Service Работа/услуга организации (НСИ №59)
     * @param string $ServicePaymentSize Размер платы (цены, тарифа) за работы (услуги)/Размер платы за работы (услуги), руб.
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $Service = null, string $ServicePaymentSize = null)
    {
        $this->Service = $Service;
        $this->ServicePaymentSize = $ServicePaymentSize;
    }
}