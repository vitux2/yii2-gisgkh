<?php

namespace gisgkh\types\HouseManagement\SupplyResourceContractType;

/**
 * Срок внесения платы, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
 */
class PaymentDate
{
    /**
     * Срок внесения платы (число), не позднее. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     * 
     * @var string
     */
     public $Date = null;

    /**
     * Тип срока:
C (urrrent) - текущего расчетного месяца.
N (ext) - следующего месяца за расчетным. 
     * 
     * @var string
     */
     public $DateType = null;

    /**
     * @param string $Date Срок внесения платы (число), не позднее. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     * @param string $DateType Тип срока:
C (urrrent) - текущего расчетного месяца.
N (ext) - следующего месяца за расчетным. 
     */
    public function __construct(string $Date = null, string $DateType = null)
    {
        $this->Date = $Date;
        $this->DateType = $DateType;
    }
}