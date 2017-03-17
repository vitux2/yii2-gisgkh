<?php

namespace gisgkh\types\HouseManagement;

/**
 * Инициатор - физическое лицо
 */
class VotingInitiatorIndType extends \gisgkh\types\IndividualRegistryBase\FIOType
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
     * @var \gisgkh\types\HouseManagement\VotingInitiatorIndID
     */
     public $VotingInitiatorIndID = null;

    /**
     * Место рождения
     * 
     * @var string
     */
     public $PlaceBirth = null;

    /**
     * @param string [$Sex] Пол (M- мужской, F-женский)
     * @param string [$DateOfBirth] Дата рождения
     * @param string $SNILS СНИЛС
     * @param \gisgkh\types\HouseManagement\VotingInitiatorIndID $VotingInitiatorIndID Удостоверение личности
     * @param string [$PlaceBirth] Место рождения
     */
    public function __construct(string $Sex = null, string $DateOfBirth = null, string $SNILS = null, \gisgkh\types\HouseManagement\VotingInitiatorIndID $VotingInitiatorIndID = null, string $PlaceBirth = null)
    {
        $this->Sex = $Sex;
        $this->DateOfBirth = $DateOfBirth;
        $this->SNILS = $SNILS;
        $this->VotingInitiatorIndID = $VotingInitiatorIndID;
        $this->PlaceBirth = $PlaceBirth;
    }
}