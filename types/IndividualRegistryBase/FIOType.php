<?php

namespace gisgkh\types\IndividualRegistryBase;

/**
 * ФИО
 */
class FIOType
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
     * @param string $Surname Фамилия
     * @param string $FirstName Имя
     * @param string [$Patronymic] Отчество
     */
    public function __construct(string $Surname = null, string $FirstName = null, string $Patronymic = null)
    {
        $this->Surname = $Surname;
        $this->FirstName = $FirstName;
        $this->Patronymic = $Patronymic;
    }
}