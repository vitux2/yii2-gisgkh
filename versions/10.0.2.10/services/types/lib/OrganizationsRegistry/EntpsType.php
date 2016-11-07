<?php

namespace gisgkh\types\lib\OrganizationsRegistry;
use gisgkh\types\GisgkhType;

/**
 * Индивидуальный предприниматель
 *
 * @package gisgkh\types\lib\OrganizationsRegistry
 */
class EntpsType extends GisgkhType
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

    /**
     * @var string $Sex Пол (M- мужской, F-женский)
     */
    public $Sex = null;

    /**
     * @var string $OGRNIP ОГРНИП, 15 символов
     */
    public $OGRNIP = null;

    /**
     * @var string $StateRegistrationDate Дата государственной регистрации
     */
    public $StateRegistrationDate = null;

    /**
     * @var string $INN ИНН, 10 или 12 символов
     */
    public $INN = null;
}