<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;

/**
 * Срок по событиям биллинга (выствление платежек, оплата, информация об оплате)
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType_BillingDate extends GisgkhType
{
    /**
     * Срок, не позднее. Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1".
     * @var integer
     */
    public $Date = null;

    /**
     * Тип срока:
     * C (urrrent) - текущего расчетного месяца.
     * N (ext) - следующего месяца за расчетным.
     * @var string
     */
    public $DateType = 'C';
}