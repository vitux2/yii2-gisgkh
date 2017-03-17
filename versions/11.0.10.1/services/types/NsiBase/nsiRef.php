<?php

namespace gisgkh\types\NsiBase;

/**
 * Ссылка на справочник
 */
class nsiRef
{
    /**
     * Код записи справочника
     * 
     * @var string
     */
     public $Code = null;

    /**
     * Идентификатор в ГИС ЖКХ
     * 
     * @var string
     */
     public $GUID = null;

    /**
     * Значение
     * 
     * @var string
     */
     public $Name = null;

    /**
     * @param string $Code Код записи справочника
     * @param string $GUID Идентификатор в ГИС ЖКХ
     * @param string [$Name] Значение
     */
    public function __construct(string $Code = null, string $GUID = null, string $Name = null)
    {
        $this->Code = $Code;
        $this->GUID = $GUID;
        $this->Name = $Name;
    }
}