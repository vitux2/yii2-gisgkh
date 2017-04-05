<?php

namespace gisgkh\types\OrganizationsRegistryBase;

/**
 * Индивидуальный предприниматель
 */
class EntpsType
{
    /**
     * Фамилия
     * 
     * @var string
     */
     public $Surname = null;

    /**
     * Имя
     * 
     * @var string
     */
     public $FirstName = null;

    /**
     * Отчество
     * 
     * @var string
     */
     public $Patronymic = null;

    /**
     * Пол (M- мужской, F-женский)
     * 
     * @var string
     */
     public $Sex = null;

    /**
     * ОГРНИП
     * 
     * @var string
     */
     public $OGRNIP = null;

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
     * @param string $Surname Фамилия
     * @param string $FirstName Имя
     * @param string [$Patronymic] Отчество
     * @param string [$Sex] Пол (M- мужской, F-женский)
     * @param string $OGRNIP ОГРНИП
     * @param string [$StateRegistrationDate] Дата государственной регистрации
     * @param string [$INN] ИНН
     */
    public function __construct(string $Surname = null, string $FirstName = null, string $Patronymic = null, string $Sex = null, string $OGRNIP = null, string $StateRegistrationDate = null, string $INN = null)
    {
        $this->Surname = $Surname;
        $this->FirstName = $FirstName;
        $this->Patronymic = $Patronymic;
        $this->Sex = $Sex;
        $this->OGRNIP = $OGRNIP;
        $this->StateRegistrationDate = $StateRegistrationDate;
        $this->INN = $INN;
    }
}