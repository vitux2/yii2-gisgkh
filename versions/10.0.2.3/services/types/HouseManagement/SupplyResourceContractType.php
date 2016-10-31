<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;
use gisgkh\types\lib\OrganizationsRegistry\RegOrgType;

/**
 * Договор ресурсоснабжения
 *
 * Правила заполнения:
 * 1. В зависимости является ли договор обычным, на бумажном носителе, либо договором-офертой, заполняется один из атрибутов:
 *  - IsContract
 *  - IsNotContract
 * 2. В зависимости от типа второй стороны договора (оферта, собственник помещения в МКД, собственних жилого дома, УО) заполняется один из атрибутов:
 *  - Offer (по-умолчанию)
 *  - ApartmentBuildingOwner
 *  - LivingHouseOwner
 *  - Organization
 *
 * @package gisgkh\types\HouseManagement
 */
class SupplyResourceContractType extends GisgkhType
{
    /* *
     * Реквизиты договора, нужно заполнить только один из атрибутов:
     * - IsContract
     * - IsNotContract
     * ************************************************************************************************************** */

    /**
     * @var SupplyResourceContractType_IsContract $IsContract Реквизиты обычного договора
     */
    public $IsContract = null;

    /**
     * @var SupplyResourceContractType_IsNotContract $IsContract Реквизиты договора оферты
     */
    public $IsNotContract = null;

    /* *
     * Вторая сторона договора, нужно заполнить один из атрибутов:
     * - Offer
     * - ApartmentBuildingOwner
     * - LivingHouseOwner
     * - Organization
     * ************************************************************************************************************** */

    /**
     * @var string $Offer договор является договором-офертой
     */
    public $Offer = null;
    /* @return boolean */
    public function getIsOffer() { return filter_var($this->Offer, FILTER_VALIDATE_BOOLEAN); }
    public function setIsOffer() { $this->Offer = 'true' ; }

    /**
     * @var Owner $ApartmentBuildingOwner Собственник или пользователь жилого (нежилого) помещения в МКД
     */
    public $ApartmentBuildingOwner = null;

    /**
     * @var Owner $ApartmentBuildingOwner Собственник или пользователь жилого дома (домовладения)
     */
    public $LivingHouseOwner = null;

    /**
     * @var RegOrgType $organizations Управляющая организация
     */
    public $organizations = null;

    /* *
     * Обязательные поля
     * ************************************************************************************************************** */

    /**
     * @var SupplyResourceContractType_Period $Period Период сдачи текущих показаний по ПУ.
     * Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
     */
    public $Period = null;

    /**
     * @var SupplyResourceContractType_ObjectAddress[] $ObjectAddress Данные об объекте жилищного фонда.
     * При импорте договора должен быть добавлен как минимум один адрес объекта жилищного фонда
     */
    public $ObjectAddress = null;

    /**
     * @var string $IsPlannedVolume Наличие в договоре планового объема и режима подачи поставки ресурсов (true/false)
     * Обязательное поле ???
     */
    public $IsPlannedVolume = null;
    /* @return boolean */
    public function getIsPlannedVolume() { return filter_var($this->IsPlannedVolume, FILTER_VALIDATE_BOOLEAN); }
    /* @param boolean $value */
    public function setIsPlannedVolume($value = true) { $this->IsPlannedVolume = $value ? 'true' : 'false'; }

    /**
     * @var SupplyResourceContractType_ContractSubject[] $ContractSubject Предмет договора, до 100 элементов
     * Обязательное поле ???
     */
    public $ContractSubject = null;

    /**
     * @var string $SpecifyingQualityIndicators Показатели качества коммунальных ресурсов и температурный график ведутся:
     * D - в разрезе договора.
     * O - в разрезе объектов жилищного фонда.
     *
     * Обязательное поле ???
     */
    public $SpecifyingQualityIndicators = null;

    /* *
     * Не обязательные поля
     * ************************************************************************************************************** */

    /**
     * @var nsiRef $ContractBase Ссылка на НСИ "Основание заключения договора" (реестровый номер 58)
     * Не обязательное поле
     */
    public $ContractBase = null;

    /**
     * @var string $ComptetionDate Дата окончания действия (со схеме именно compTetion, это не ошибка тут)
     * Не обязательное поле
     */
    public $ComptetionDate = null;
    /* @return \DateTime */
    public function getCompletionDate() { return empty($this->ComptetionDate) ? null : new \DateTime($this->ComptetionDate); }
    /* @param \DateTime $completionDate */
    public function setCompletionDate(\DateTime $completionDate) { $this->ComptetionDate = $completionDate->format('Y-m-d'); }

    /**
     * @var string $CountingResource Коммерческий учет ресурса осуществляет:
     * R(SO)- РСО.
     * P(roprietor)-Исполнитель коммунальных услуг. Заполняется, если второй стороной договора является управляющая организация
     *
     * Не обязательное поле
     */
    public $CountingResource = null;

    /**
     * @var Quality[] $Quality Показатель качества (содержащийся в справочнике показателей качества).
     * Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется.
     * Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * От 0 до 100 элементов
     * Не обязательное поле
     */
    public $Quality = null;

    /**
     * @var OtherQualityIndicator[] $OtherQualityIndicator Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества).
     * Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется.
     * Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * От 0 до 100 элементов
     * Не обязательное поле
     */
    public $OtherQualityIndicator = null;

    /**
     * @var TemperatureChart[] $TemperatureChart Информация о температурном графике.
     * Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и
     * элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия".
     * Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только
     * если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
     * От 0 до 1000 элементов
     * Не обязательное поле
     */
    public $TemperatureChart = null;

    /* *
     * Информация о сроках оплаты
     * ************************************************************************************************************** */

    /**
     * @var string $BillingDate Срок выставления платежных документов, не позднее: (число месяца, следующего за расчетным).
     * Является обязательным, если вторая сторона договора отличается от "Управляющая организация"
     * и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1"
     *
     * - xs:byte
     * - от -1 до 30
     */
    public $BillingDate = null;

    /**
     * @var string $PaymentDate Срок внесения платы, не позднее: (число месяца, следующего за расчетным).
     * Является обязательным, если вторая сторона договора отличается от "Управляющая организация"
     * и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1"
     *
     * - xs:byte
     * - от -1 до 30
     */
    public $PaymentDate = null;

    /**
     * @var string $ProvidingInformationDate Срок предоставления информации о поступивших платежах (число месяца, следующего за расчетным).
     * Является обязательным, если второй стороной договора является «Управляющая организация»,
     * «Коммерческий учет ресурса осуществляет» = «РСО» и договор не является публичным и/или
     * присутствует заключенный на бумажном носителе или в электронной форме.
     * Если нужно указать значение "Последний день месяца", то поле заполняется значением "-1"
     *
     * - xs:byte
     * - от -1 до 30
     */
    public $ProvidingInformationDate = null;
}