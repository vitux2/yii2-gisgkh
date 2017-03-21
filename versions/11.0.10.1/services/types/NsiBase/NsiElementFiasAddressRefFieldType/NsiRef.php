<?php

namespace gisgkh\types\NsiBase\NsiElementFiasAddressRefFieldType;

/**
 * Ссылка на элемент справочника ФИАС.
 */
class NsiRef
{
    /**
     * Идентификационный код позиции в справочнике ФИАС.
     * 
     * @var string
     */
     public $Guid = null;

    /**
     * Глобально-уникальный идентификатор адресного объекта в справочнике ФИАС.
     * 
     * @var string
     */
     public $aoGuid = null;

    /**
     * @param string $Guid Идентификационный код позиции в справочнике ФИАС.
     * @param string $aoGuid Глобально-уникальный идентификатор адресного объекта в справочнике ФИАС.
     */
    public function __construct(string $Guid = null, string $aoGuid = null)
    {
        $this->Guid = $Guid;
        $this->aoGuid = $aoGuid;
    }
}