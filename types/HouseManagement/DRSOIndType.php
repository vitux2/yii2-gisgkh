<?php

namespace gisgkh\types\HouseManagement;

/**
 * Физическое лицо в ДРСО
 */
class DRSOIndType
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
     * Дата рождения
     * 
     * @var string
     */
     public $DateOfBirth = null;

    /**
     * СНИЛС
     * 
     * @var string
     */
     public $SNILS = null;

    /**
     * Удостоверение личности
     * 
     * @var \gisgkh\types\IndividualRegistryBase\ID
     */
     public $ID = null;

    /**
     * Место рождения
     * 
     * @var string
     */
     public $PlaceBirth = null;

    /**
     * @param string $Surname Фамилия
     * @param string $FirstName Имя
     * @param string [$Patronymic] Отчество
     * @param string [$Sex] Пол (M- мужской, F-женский)
     * @param string [$DateOfBirth] Дата рождения
     * @param string $SNILS СНИЛС
     * @param \gisgkh\types\IndividualRegistryBase\ID $ID Удостоверение личности
     * @param string [$PlaceBirth] Место рождения
     */
    public function __construct(string $Surname = null, string $FirstName = null, string $Patronymic = null, string $Sex = null, string $DateOfBirth = null, string $SNILS = null, \gisgkh\types\IndividualRegistryBase\ID $ID = null, string $PlaceBirth = null)
    {
        $this->Surname = $Surname;
        $this->FirstName = $FirstName;
        $this->Patronymic = $Patronymic;
        $this->Sex = $Sex;
        $this->DateOfBirth = $DateOfBirth;
        $this->SNILS = $SNILS;
        $this->ID = $ID;
        $this->PlaceBirth = $PlaceBirth;
    }
}