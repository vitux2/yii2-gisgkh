<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Ссылка на элемент справочника ФИАС
 * Дочерняя структура для NsiElementFiasAddressRefFieldType
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementFiasAddressRefFieldType_NsiRef extends GisgkhType
{
    /**
     * @var string $Guid Идентификационный код позиции в справочнике ФИАС
     */
    public $Guid = null;

    /**
     * @var string $aoGuid Глобально-уникальный идентификатор адресного объекта в справочнике ФИАС
     */
    public $aoGuid = null;
}