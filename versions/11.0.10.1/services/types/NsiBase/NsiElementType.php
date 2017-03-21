<?php

namespace gisgkh\types\NsiBase;

/**
 * Составной тип. Элемент справочника.
 */
class NsiElementType
{
    /**
     * Код элемента справочника, уникальный в пределах справочника.
     * 
     * @var string
     */
     public $Code = null;

    /**
     * Глобально-уникальный идентификатор элемента справочника.
     * 
     * @var string
     */
     public $GUID = null;

    /**
     * Дата и время последнего изменения элемента справочника (в том числе создания).
     * 
     * @var string
     */
     public $Modified = null;

    /**
     * Дата начала действия значения
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * Дата окончания действия значения
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Признак актуальности элемента справочника.
     * 
     * @var string
     */
     public $IsActual = null;

    /**
     * Наименование и значение поля для элемента справочника.
     * 
     * @var \gisgkh\types\NsiBase\NsiElementFieldType[]
     */
     public $NsiElementField = null;

    /**
     * Дочерний элемент.
     * 
     * @var \gisgkh\types\NsiBase\NsiElementType[]
     */
     public $ChildElement = null;

    /**
     * @param string $Code Код элемента справочника, уникальный в пределах справочника.
     * @param string $GUID Глобально-уникальный идентификатор элемента справочника.
     * @param string $Modified Дата и время последнего изменения элемента справочника (в том числе создания).
     * @param string $StartDate Дата начала действия значения
     * @param string $EndDate Дата окончания действия значения
     * @param string $IsActual Признак актуальности элемента справочника.
     * @param \gisgkh\types\NsiBase\NsiElementFieldType[] [$NsiElementField] Наименование и значение поля для элемента справочника.
     * @param \gisgkh\types\NsiBase\NsiElementType[] [$ChildElement] Дочерний элемент.
     */
    public function __construct(string $Code = null, string $GUID = null, string $Modified = null, string $StartDate = null, string $EndDate = null, string $IsActual = null, array $NsiElementField = null, array $ChildElement = null)
    {
        $this->Code = $Code;
        $this->GUID = $GUID;
        $this->Modified = $Modified;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->IsActual = $IsActual;
        $this->NsiElementField = $NsiElementField;
        $this->ChildElement = $ChildElement;
    }
}