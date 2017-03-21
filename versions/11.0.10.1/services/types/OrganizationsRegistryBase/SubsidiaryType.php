<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * ОП (Обособленное подразделение)
 */
class SubsidiaryType
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
     * ОГРН
     * 
     * @var string
     */
     public $OGRN = null;

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
     * ОКОПФ
     * 
     * @var string
     */
     public $OKOPF = null;

    /**
     * Адрес регистрации
     * 
     * @var string
     */
     public $Address = null;

    /**
     * Адрес регистрации (Глобальный уникальный идентификатор дома по ФИАС)
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Дата прекращения деятельности
     * 
     * @var string
     */
     public $ActivityEndDate = null;

    /**
     * Источник информации
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\SubsidiaryType\SourceName
     */
     public $SourceName = null;

    /**
     * @param string $FullName Полное наименование
     * @param string [$ShortName] Сокращенное наименование
     * @param string $OGRN ОГРН
     * @param string $INN ИНН
     * @param string $KPP КПП
     * @param string $OKOPF ОКОПФ
     * @param string $Address Адрес регистрации
     * @param string [$FIASHouseGuid] Адрес регистрации (Глобальный уникальный идентификатор дома по ФИАС)
     * @param string [$ActivityEndDate] Дата прекращения деятельности
     * @param \gisgkh\types\OrganizationsRegistryBase\SubsidiaryType\SourceName $SourceName Источник информации
     */
    public function __construct(string $FullName = null, string $ShortName = null, string $OGRN = null, string $INN = null, string $KPP = null, string $OKOPF = null, string $Address = null, string $FIASHouseGuid = null, string $ActivityEndDate = null, \gisgkh\types\OrganizationsRegistryBase\SubsidiaryType\SourceName $SourceName = null)
    {
        $this->FullName = $FullName;
        $this->ShortName = $ShortName;
        $this->OGRN = $OGRN;
        $this->INN = $INN;
        $this->KPP = $KPP;
        $this->OKOPF = $OKOPF;
        $this->Address = $Address;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ActivityEndDate = $ActivityEndDate;
        $this->SourceName = $SourceName;
    }
}