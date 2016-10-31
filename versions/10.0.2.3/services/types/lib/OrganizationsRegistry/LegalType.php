<?php

namespace gisgkh\types\lib\OrganizationsRegistry;
use gisgkh\types\GisgkhType;

/**
 * Юридическое лицо
 *
 * @package gisgkh\types\lib\OrganizationsRegistry
 */
class LegalType extends GisgkhType
{
    /**
     * @var string $ShortName Сокращенное наименование, до 255 символов
     */
    public $ShortName = null;

    /**
     * @var string $FullName Полное наименование, до 255 символов
     */
    public $FullName = null;

    /**
     * @var string $CommercialName Фирменное наименование, до 255 символов
     */
    public $CommercialName = null;

    /**
     * @var string $OGRN ОГРН, 13 символов
     */
    public $OGRN = null;

    /**
     * @var string $StateRegistrationDate Дата государственной регистрации
     */
    public $StateRegistrationDate = null;

    /**
     * @var string $INN ИНН, 10 или 12 цифр
     */
    public $INN = null;

    /**
     * @var string $KPP КПП, 9 цифр
     */
    public $KPP = null;

    /**
     * @var string $OKOPF ОКОПФ, от 1 до 5 символов
     */
    public $OKOPF = null;

    /**
     * @var string $Address Адрес регистрации
     */
    public $Address = null;

    /**
     * @var string $FIASHouseGuid Адрес регистрации (Глобальный уникальный идентификатор дома по ФИАС). GUID
     */
    public $FIASHouseGuid = null;

    /**
     * @var string $ActivityEndDate Дата прекращения деятельности
     */
    public $ActivityEndDate = null;
}