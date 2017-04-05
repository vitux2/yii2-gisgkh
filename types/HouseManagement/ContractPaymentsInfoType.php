<?php

namespace gisgkh\types\HouseManagement;

/**
 * Тип информации о размере платы за жилое помещение по ДУ
 */
class ContractPaymentsInfoType
{
    /**
     * Дата начала периода
     * 
     * @var string
     */
     public $BeginDate = null;

    /**
     * Дата окончания периода
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Размер платы (цена) за услуги, работы по управлению МКД (если утверждена протоколом обшего собрания собственников)/Размер платы за содержание жилого помещения, установленный по результатам открытого конкурса (если утверждена протоколом открытого конкурса)
     * 
     * @var string
     */
     public $HouseManagementPaymentSize = null;

    /**
     * Протокол общего собрания собственников помещений в многоквартирном доме об установлении размера платы за содержание жилого помещения
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $Protocol = null;

    /**
     * Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме/Информация о размере платы за содержание жилого помещения, установленном по результатам открытого конкурса по отбору управляющей организации для управления многоквартирным домом
     * 
     * @var \gisgkh\types\HouseManagement\ContractPaymentsInfoType\ServicePayment[]
     */
     public $ServicePayment = null;

    /**
     * Тип размера платы:
(P)rotocol - утвержденный протоколом общего собрания собственников
(С)ompetition - Установленный по результатам открытого конкурса
					
     * 
     * @var string
     */
     public $Type = null;

    /**
     * @param string $BeginDate Дата начала периода
     * @param string $EndDate Дата окончания периода
     * @param string $HouseManagementPaymentSize Размер платы (цена) за услуги, работы по управлению МКД (если утверждена протоколом обшего собрания собственников)/Размер платы за содержание жилого помещения, установленный по результатам открытого конкурса (если утверждена протоколом открытого конкурса)
     * @param \gisgkh\types\Base\AttachmentType[] [$Protocol] Протокол общего собрания собственников помещений в многоквартирном доме об установлении размера платы за содержание жилого помещения
     * @param \gisgkh\types\HouseManagement\ContractPaymentsInfoType\ServicePayment[] [$ServicePayment] Информация о размере платы (цене, тарифе) за содержание и текущий ремонт общего имущества в многоквартирном доме/Информация о размере платы за содержание жилого помещения, установленном по результатам открытого конкурса по отбору управляющей организации для управления многоквартирным домом
     * @param string $Type Тип размера платы:
(P)rotocol - утвержденный протоколом общего собрания собственников
(С)ompetition - Установленный по результатам открытого конкурса
					
     */
    public function __construct(string $BeginDate = null, string $EndDate = null, string $HouseManagementPaymentSize = null, array $Protocol = null, array $ServicePayment = null, string $Type = null)
    {
        $this->BeginDate = $BeginDate;
        $this->EndDate = $EndDate;
        $this->HouseManagementPaymentSize = $HouseManagementPaymentSize;
        $this->Protocol = $Protocol;
        $this->ServicePayment = $ServicePayment;
        $this->Type = $Type;
    }
}