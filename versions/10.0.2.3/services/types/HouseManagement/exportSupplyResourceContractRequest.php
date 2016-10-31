<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\lib\BaseType;

/**
 * Запрос на экспорт договоров ресурсоснабжения
 *
 * Выборку договоров можно делать по одному из трёх критериев:
 * 1. корневой GUID договора
 * 2. GUID версии договора
 * 3. набор косвенных признаков, таких как номер договора, дата заключение, дом и т.д.
 *
 * В зависимости от критерия выборки нужно заполнить только один блоков
 *
 * @package gisgkh\types\HouseManagement
 */
class exportSupplyResourceContractRequest extends BaseType
{

    public $version = '10.0.1.1';

    /* *
     * 1. корневой GUID договора
     * ************************************************************************************************************** */

    /**
     * @var string[]|null $ContractRootGUID Идентификатор договора ресурсоснабжения в ГИС ЖКХ
     * Можно указать до 1000 идентификаторов в одном запросе
     */
    public $ContractRootGUID = null;

    /* *
     * 2. GUID версии договора
     * ************************************************************************************************************** */

    /**
     * @var string[]|null $ContractGUID Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ
     * Можно указать до 1000 идентификаторов в одном запросе
     */
    public $ContractGUID = null;

    /* *
     * 3. набор косвенных признаков, таких как номер договора, дата заключение, дом и т.д.
     * ************************************************************************************************************** */

    /**
     * @var string $ContractNumber Номер договора
     * - base:LongTextType
     * - от 1 до 20 символов
     * - не обязательное поле
     */
    public $ContractNumber = null;

    /**
     * @var string $SigningDateStart Дата заключения "С"
     * - xs:date
     * - не обязательное поле
     */
    public $SigningDateStart = null;

    /**
     * @var string $SigningDateEnd Дата заключения "По"
     * - xs:date
     * - не обязательное поле
     */
    public $SigningDateEnd = null;

    /**
     * @var string $FIASHouseGuid Адрес дома. Глобальный уникальный идентификатор дома по ФИАС
     * - base:GUIDType
     * - не обязательное поле
     */
    public $FIASHouseGuid = null;

    /**
     * @var SupplyResourceContractType_ContractSubject[] $ContractSubject Предмет договора
     * - не обязательное поле
     * - до 100 элементов в одном запросе
     */
    public $ContractSubject = null;
}