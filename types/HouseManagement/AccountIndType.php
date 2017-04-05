<?php

namespace gisgkh\types\HouseManagement;

/**
 * Физическое лицо
 */
class AccountIndType extends \gisgkh\types\IndividualRegistryBase\FIOType
{
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
     * @param string [$Sex] Пол (M- мужской, F-женский)
     * @param string [$DateOfBirth] Дата рождения
     * @param string $SNILS СНИЛС
     * @param \gisgkh\types\IndividualRegistryBase\ID $ID Удостоверение личности
     */
    public function __construct(string $Sex = null, string $DateOfBirth = null, string $SNILS = null, \gisgkh\types\IndividualRegistryBase\ID $ID = null)
    {
        $this->Sex = $Sex;
        $this->DateOfBirth = $DateOfBirth;
        $this->SNILS = $SNILS;
        $this->ID = $ID;
    }
}