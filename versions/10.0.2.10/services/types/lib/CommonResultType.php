<?php

namespace gisgkh\types\lib;
use gisgkh\types\GisgkhType;

/**
 * Результат выполнения C_UD
 *
 * @package gisgkh\types\HouseManagement
 */
class CommonResultType extends GisgkhType
{
    /**
     * @var string $GUID Идентификатор создаваемой/изменяемой сущности
     * - tns:GUIDType
     * - не обязательное поле (может отсутствовать в ответе, например в случае ощибки)
     */
    public $GUID = null;

    /**
     * @var string $TransportGUID Транспортный идентификатор
     * - tns:GUIDType
     * - обязательное поле (в ответе присутствует всегда)
     */
    public $TransportGUID = null;

    /* *
     * Резултат операции, в зависимости от успешности будет присутствовать:
     * - атрибут Error, если возникла ошибка
     * - атрибуты UpdateDate и UniqueNumber (не обязательно), если операция выполнена успешно
     * ************************************************************************************************************** */

    /**
     * @var string $UniqueNumber Уникальный реестровый номер
     * - xs:string
     * - не обязательное поле
     */
    public $UniqueNumber = null;

    /**
     * @var string $UpdateDate Дата модификации
     * - xs:dateTime
     * - обязательное поле
     */
    public $UpdateDate = null;

    /**
     * @var ErrorMessageType[] $Error Описание ошибки (массив записей)
     */
    public $Error = [];
}