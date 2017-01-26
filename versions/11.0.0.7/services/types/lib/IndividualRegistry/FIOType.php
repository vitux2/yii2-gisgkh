<?php

namespace gisgkh\types\lib\IndividualRegistry;

use gisgkh\types\GisgkhType;

/**
 * ФИО
 * @package gisgkh\types\lib\IndividualRegistry
 */
class FIOType extends GisgkhType
{
    /**
     * @var string $Surname Фамилия
     */
    public $Surname = null;

    /**
     * @var string $FirstName Имя
     */
    public $FirstName = null;

    /**
     * @var string $Patronymic Отчество
     */
    public $Patronymic = null;
}