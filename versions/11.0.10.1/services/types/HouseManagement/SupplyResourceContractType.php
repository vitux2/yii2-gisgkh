<?php

namespace gisgkh\types\HouseManagement;

/**
 * Договор ресурсоснабжения
 */
class SupplyResourceContractType
{
    /**
     * Договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\IsContract
     */
     public $IsContract = null;

    /**
     * Договор является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\IsNotContract
     */
     public $IsNotContract = null;

    /**
     * Дата окончания действия
     * 
     * @var string
     */
     public $ComptetionDate = null;

    /**
     * Период сдачи текущих показаний по ПУ. Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\Period
     */
     public $Period = null;

    /**
     * 
Ссылка на НСИ "Основание заключения договора" (реестровый номер 58).
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ContractBase = null;

    /**
     * Договор оферта
     * 
     * @var string
     */
     public $Offer = null;

    /**
     * Собственник или пользователь жилого (нежилого) помещения в МКД
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\ApartmentBuildingOwner
     */
     public $ApartmentBuildingOwner = null;

    /**
     * Собственник или пользователь жилого дома (домовладения)
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\LivingHouseOwner
     */
     public $LivingHouseOwner = null;

    /**
     * Управляющая организация
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\Organization
     */
     public $Organization = null;

    /**
     * Наличие в договоре планового объема и режима подачи поставки ресурсов
     * 
     * @var string
     */
     public $IsPlannedVolume = null;

    /**
     * Предмет договора
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\ContractSubject[]
     */
     public $ContractSubject = null;

    /**
     * Коммерческий учет ресурса осуществляет:
R(SO)- РСО.
P(roprietor)-Исполнитель коммунальных услуг. Заполняется, если второй стороной договора является управляющая организация
     * 
     * @var string
     */
     public $CountingResource = null;

    /**
     * Показатели качества коммунальных ресурсов и температурный график ведутся:
D - в разрезе договора.
O - в разрезе объектов жилищного фонда. 
     * 
     * @var string
     */
     public $SpecifyingQualityIndicators = null;

    /**
     * Данные об объекте жилищного фонда. При импорте договора должен быть добавлен как минимум один адрес объекта жилищного фонда
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress[]
     */
     public $ObjectAddress = null;

    /**
     * Показатель качества (содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\Quality[]
     */
     public $Quality = null;

    /**
     * Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\OtherQualityIndicator[]
     */
     public $OtherQualityIndicator = null;

    /**
     * Информация о температурном графике. Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия". Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\TemperatureChart[]
     */
     public $TemperatureChart = null;

    /**
     * Срок представления (выставления) платежных документов, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\BillingDate
     */
     public $BillingDate = null;

    /**
     * Срок внесения платы, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\PaymentDate
     */
     public $PaymentDate = null;

    /**
     * Срок предоставления информации о поступивших платежах, не позднее. Является обязательным, если второй стороной договора является «Управляющая организация», «Коммерческий учет ресурса осуществляет» = «РСО» и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * 
     * @var \gisgkh\types\HouseManagement\SupplyResourceContractType\ProvidingInformationDate
     */
     public $ProvidingInformationDate = null;

    /**
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\IsContract $IsContract Договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\IsNotContract $IsNotContract Договор является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме
     * @param string [$ComptetionDate] Дата окончания действия
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\Period [$Period] Период сдачи текущих показаний по ПУ. Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
     * @param \gisgkh\types\NsiBase\nsiRef [$ContractBase] 
Ссылка на НСИ "Основание заключения договора" (реестровый номер 58).
     * @param string $Offer Договор оферта
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\ApartmentBuildingOwner $ApartmentBuildingOwner Собственник или пользователь жилого (нежилого) помещения в МКД
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\LivingHouseOwner $LivingHouseOwner Собственник или пользователь жилого дома (домовладения)
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\Organization $Organization Управляющая организация
     * @param string $IsPlannedVolume Наличие в договоре планового объема и режима подачи поставки ресурсов
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\ContractSubject[] $ContractSubject Предмет договора
     * @param string [$CountingResource] Коммерческий учет ресурса осуществляет:
R(SO)- РСО.
P(roprietor)-Исполнитель коммунальных услуг. Заполняется, если второй стороной договора является управляющая организация
     * @param string $SpecifyingQualityIndicators Показатели качества коммунальных ресурсов и температурный график ведутся:
D - в разрезе договора.
O - в разрезе объектов жилищного фонда. 
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\ObjectAddress[] [$ObjectAddress] Данные об объекте жилищного фонда. При импорте договора должен быть добавлен как минимум один адрес объекта жилищного фонда
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\Quality[] [$Quality] Показатель качества (содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\OtherQualityIndicator[] [$OtherQualityIndicator] Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\TemperatureChart[] [$TemperatureChart] Информация о температурном графике. Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия". Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\BillingDate [$BillingDate] Срок представления (выставления) платежных документов, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\PaymentDate [$PaymentDate] Срок внесения платы, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * @param \gisgkh\types\HouseManagement\SupplyResourceContractType\ProvidingInformationDate [$ProvidingInformationDate] Срок предоставления информации о поступивших платежах, не позднее. Является обязательным, если второй стороной договора является «Управляющая организация», «Коммерческий учет ресурса осуществляет» = «РСО» и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     */
    public function __construct(\gisgkh\types\HouseManagement\SupplyResourceContractType\IsContract $IsContract = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\IsNotContract $IsNotContract = null, string $ComptetionDate = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\Period $Period = null, \gisgkh\types\NsiBase\nsiRef $ContractBase = null, string $Offer = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\ApartmentBuildingOwner $ApartmentBuildingOwner = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\LivingHouseOwner $LivingHouseOwner = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\Organization $Organization = null, string $IsPlannedVolume = null, array $ContractSubject = null, string $CountingResource = null, string $SpecifyingQualityIndicators = null, array $ObjectAddress = null, array $Quality = null, array $OtherQualityIndicator = null, array $TemperatureChart = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\BillingDate $BillingDate = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\PaymentDate $PaymentDate = null, \gisgkh\types\HouseManagement\SupplyResourceContractType\ProvidingInformationDate $ProvidingInformationDate = null)
    {
        $this->IsContract = $IsContract;
        $this->IsNotContract = $IsNotContract;
        $this->ComptetionDate = $ComptetionDate;
        $this->Period = $Period;
        $this->ContractBase = $ContractBase;
        $this->Offer = $Offer;
        $this->ApartmentBuildingOwner = $ApartmentBuildingOwner;
        $this->LivingHouseOwner = $LivingHouseOwner;
        $this->Organization = $Organization;
        $this->IsPlannedVolume = $IsPlannedVolume;
        $this->ContractSubject = $ContractSubject;
        $this->CountingResource = $CountingResource;
        $this->SpecifyingQualityIndicators = $SpecifyingQualityIndicators;
        $this->ObjectAddress = $ObjectAddress;
        $this->Quality = $Quality;
        $this->OtherQualityIndicator = $OtherQualityIndicator;
        $this->TemperatureChart = $TemperatureChart;
        $this->BillingDate = $BillingDate;
        $this->PaymentDate = $PaymentDate;
        $this->ProvidingInformationDate = $ProvidingInformationDate;
    }
}