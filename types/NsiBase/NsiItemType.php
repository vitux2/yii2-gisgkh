<?php

namespace gisgkh\types\NsiBase;

/**
 * Данные справочника.
 */
class NsiItemType
{
    /**
     * Реестровый номер справочника.
     * 
     * @var string
     */
     public $NsiItemRegistryNumber = null;

    /**
     * Дата и время формирования данных справочника.
     * 
     * @var string
     */
     public $Created = null;

    /**
     * Элемент справочника верхнего уровня.
     * 
     * @var \gisgkh\types\NsiBase\NsiElementType[]
     */
     public $NsiElement = null;

    /**
     * @param string $NsiItemRegistryNumber Реестровый номер справочника.
     * @param string $Created Дата и время формирования данных справочника.
     * @param \gisgkh\types\NsiBase\NsiElementType[] $NsiElement Элемент справочника верхнего уровня.
     */
    public function __construct(string $NsiItemRegistryNumber = null, string $Created = null, array $NsiElement = null)
    {
        $this->NsiItemRegistryNumber = $NsiItemRegistryNumber;
        $this->Created = $Created;
        $this->NsiElement = $NsiElement;
    }
}