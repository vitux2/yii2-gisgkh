<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * Юридическое лицо
 */
class LegalType
{
    /**
     * Сокращенное наименование
     * 
     * @var string
     */
     public $ShortName = null;

    /**
     * Полное наименование
     * 
     * @var string
     */
     public $FullName = null;

    /**
     * Фирменное наименование
     * 
     * @var string
     */
     public $CommercialName = null;

    /**
     * ОГРН
     * 
     * @var string
     */
     public $OGRN = null;

    /**
     * Дата государственной регистрации
     * 
     * @var string
     */
     public $StateRegistrationDate = null;

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
     * @param string [$ShortName] Сокращенное наименование
     * @param string $FullName Полное наименование
     * @param string [$CommercialName] Фирменное наименование
     * @param string $OGRN ОГРН
     * @param string [$StateRegistrationDate] Дата государственной регистрации
     * @param string [$INN] ИНН
     * @param string [$KPP] КПП
     * @param string [$OKOPF] ОКОПФ
     * @param string [$Address] Адрес регистрации
     * @param string [$FIASHouseGuid] Адрес регистрации (Глобальный уникальный идентификатор дома по ФИАС)
     * @param string [$ActivityEndDate] Дата прекращения деятельности
     */
    public function __construct(string $ShortName = null, string $FullName = null, string $CommercialName = null, string $OGRN = null, string $StateRegistrationDate = null, string $INN = null, string $KPP = null, string $OKOPF = null, string $Address = null, string $FIASHouseGuid = null, string $ActivityEndDate = null)
    {
        $this->ShortName = $ShortName;
        $this->FullName = $FullName;
        $this->CommercialName = $CommercialName;
        $this->OGRN = $OGRN;
        $this->StateRegistrationDate = $StateRegistrationDate;
        $this->INN = $INN;
        $this->KPP = $KPP;
        $this->OKOPF = $OKOPF;
        $this->Address = $Address;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ActivityEndDate = $ActivityEndDate;
    }
}