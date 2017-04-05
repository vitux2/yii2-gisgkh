<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * ФПИЮЛ (Филиал или представительство иностранного юридического лица)
 */
class ForeignBranchType
{
    /**
     * Полное наименование
     * 
     * @var string
     */
     public $FullName = null;

    /**
     * Сокращенное наименование
     * 
     * @var string
     */
     public $ShortName = null;

    /**
     * НЗА (Номер записи об аккредитации)
     * 
     * @var string
     */
     public $NZA = null;

    /**
     * ИНН
     * 
     * @var string
     */
     public $INN = null;

    /**
     * КПП
     * 
     * @var string
     */
     public $KPP = null;

    /**
     * Адрес места нахождения(жительства)_текст
     * 
     * @var string
     */
     public $Address = null;

    /**
     * Адрес места нахождения(жительства)_ФИАС 
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Дата внесения записи в реестр аккредитованных
     * 
     * @var string
     */
     public $AccreditationStartDate = null;

    /**
     * Дата прекращения действия аккредитации
     * 
     * @var string
     */
     public $AccreditationEndDate = null;

    /**
     * Страна регистрации иностранного ЮЛ
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $RegistrationCountry = null;

    /**
     * @param string $FullName Полное наименование
     * @param string [$ShortName] Сокращенное наименование
     * @param string $NZA НЗА (Номер записи об аккредитации)
     * @param string $INN ИНН
     * @param string $KPP КПП
     * @param string [$Address] Адрес места нахождения(жительства)_текст
     * @param string $FIASHouseGuid Адрес места нахождения(жительства)_ФИАС 
     * @param string $AccreditationStartDate Дата внесения записи в реестр аккредитованных
     * @param string [$AccreditationEndDate] Дата прекращения действия аккредитации
     * @param \gisgkh\types\NsiBase\nsiRef $RegistrationCountry Страна регистрации иностранного ЮЛ
     */
    public function __construct(string $FullName = null, string $ShortName = null, string $NZA = null, string $INN = null, string $KPP = null, string $Address = null, string $FIASHouseGuid = null, string $AccreditationStartDate = null, string $AccreditationEndDate = null, \gisgkh\types\NsiBase\nsiRef $RegistrationCountry = null)
    {
        $this->FullName = $FullName;
        $this->ShortName = $ShortName;
        $this->NZA = $NZA;
        $this->INN = $INN;
        $this->KPP = $KPP;
        $this->Address = $Address;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->AccreditationStartDate = $AccreditationStartDate;
        $this->AccreditationEndDate = $AccreditationEndDate;
        $this->RegistrationCountry = $RegistrationCountry;
    }
}