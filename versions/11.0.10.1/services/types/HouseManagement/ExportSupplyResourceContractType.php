<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспортируемый договор ресурсоснабжения 
 */
class ExportSupplyResourceContractType
{
    /**
     * Договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsContract
     */
     public $IsContract = null;

    /**
     * Договор является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsNotContract
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
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Period
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
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ApartmentBuildingOwner
     */
     public $ApartmentBuildingOwner = null;

    /**
     * Собственник или пользователь жилого дома (домовладения)
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\LivingHouseOwner
     */
     public $LivingHouseOwner = null;

    /**
     * Управляющая организация
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Organization
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
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject[]
     */
     public $ContractSubject = [];

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
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ObjectAddress[]
     */
     public $ObjectAddress = [];

    /**
     * Показатель качества (содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Quality[]
     */
     public $Quality = [];

    /**
     * Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\OtherQualityIndicator[]
     */
     public $OtherQualityIndicator = [];

    /**
     * Информация о температурном графике. Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия". Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\TemperatureChart[]
     */
     public $TemperatureChart = [];

    /**
     * Срок представления (выставления) платежных документов, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\BillingDate
     */
     public $BillingDate = null;

    /**
     * Срок внесения платы, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\PaymentDate
     */
     public $PaymentDate = null;

    /**
     * Срок предоставления информации о поступивших платежах, не позднее. Является обязательным, если второй стороной договора является «Управляющая организация», «Коммерческий учет ресурса осуществляет» = «РСО» и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * 
     * @var \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ProvidingInformationDate
     */
     public $ProvidingInformationDate = null;

    /**
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsContract $IsContract Договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsNotContract [$IsNotContract] Договор является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме
     * @param string [$ComptetionDate] Дата окончания действия
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Period [$Period] Период сдачи текущих показаний по ПУ. Обязателен для заполнения, если вторая сторона отлична от "Управляющая организация"
     * @param \gisgkh\types\NsiBase\nsiRef [$ContractBase] 
Ссылка на НСИ "Основание заключения договора" (реестровый номер 58).
     * @param string $Offer Договор оферта
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ApartmentBuildingOwner $ApartmentBuildingOwner Собственник или пользователь жилого (нежилого) помещения в МКД
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\LivingHouseOwner $LivingHouseOwner Собственник или пользователь жилого дома (домовладения)
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Organization $Organization Управляющая организация
     * @param string $IsPlannedVolume Наличие в договоре планового объема и режима подачи поставки ресурсов
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ContractSubject[] $ContractSubject Предмет договора
     * @param string [$CountingResource] Коммерческий учет ресурса осуществляет:
R(SO)- РСО.
P(roprietor)-Исполнитель коммунальных услуг. Заполняется, если второй стороной договора является управляющая организация
     * @param string $SpecifyingQualityIndicators Показатели качества коммунальных ресурсов и температурный график ведутся:
D - в разрезе договора.
O - в разрезе объектов жилищного фонда. 
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ObjectAddress[] [$ObjectAddress] Данные об объекте жилищного фонда. При импорте договора должен быть добавлен как минимум один адрес объекта жилищного фонда
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Quality[] [$Quality] Показатель качества (содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\OtherQualityIndicator[] [$OtherQualityIndicator] Иной показатель качества коммунального ресурса (не содержащийся в справочнике показателей качества). Если показатели указываются в разрезе договора, то ссылка на ОЖФ не заполняется. Если показатели указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна.
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\TemperatureChart[] [$TemperatureChart] Информация о температурном графике. Если показатели качества указываются в разрезе договора, то ссылка на ОЖФ в данном элементе не заполняется и элемент может заполняться только если  предмете договора хотя бы раз встречается ресурс "Тепловая энергия". Если показатели качества указываются в разрезе ОЖФ, то ссылка на ОЖФ обязательна и элемент заполняется только если  в рамках ОЖФ встречается ресурс "Тепловая энергия".
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\BillingDate [$BillingDate] Срок представления (выставления) платежных документов, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме.
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\PaymentDate [$PaymentDate] Срок внесения платы, не позднее. Является обязательным, если вторая сторона договора отличается от "Управляющая организация" и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     * @param \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ProvidingInformationDate [$ProvidingInformationDate] Срок предоставления информации о поступивших платежах, не позднее. Является обязательным, если второй стороной договора является «Управляющая организация», «Коммерческий учет ресурса осуществляет» = «РСО» и договор не является публичным и/или присутствует заключенный на бумажном носителе или в электронной форме. 
     */
    public function __construct(\gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsContract $IsContract = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\IsNotContract $IsNotContract = null, string $ComptetionDate = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Period $Period = null, \gisgkh\types\NsiBase\nsiRef $ContractBase = null, string $Offer = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ApartmentBuildingOwner $ApartmentBuildingOwner = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\LivingHouseOwner $LivingHouseOwner = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\Organization $Organization = null, string $IsPlannedVolume = null, array $ContractSubject = [], string $CountingResource = null, string $SpecifyingQualityIndicators = null, array $ObjectAddress = [], array $Quality = [], array $OtherQualityIndicator = [], array $TemperatureChart = [], \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\BillingDate $BillingDate = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\PaymentDate $PaymentDate = null, \gisgkh\types\HouseManagement\ExportSupplyResourceContractType\ProvidingInformationDate $ProvidingInformationDate = null)
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