<?php

namespace gisgkh\types\lib\OrganizationsRegistry;
use gisgkh\types\GisgkhType;

/**
 * ОП (Обособленное подразделение)
 *
 * @package gisgkh\types\lib\OrganizationsRegistry
 */
class SubsidiaryType extends GisgkhType
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
     * @var string $OGRN ОГРН, 13 символов
     */
    public $OGRN = null;

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

    /**
     * @var string $SourceName Источник информации, до 255 символов
     */
    public $SourceName = null;
}