<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Данные справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiItemType extends GisgkhType
{
    /**
     * @var integer NsiItemRegistryNumber Реестровый номер справочника
     */
    public $NsiItemRegistryNumber = null;

    /**
     * @var string $Created Дата и время формирования данных справочника. W3C формат
     */
    public $Created = null;

    /**
     * @var NsiElementType[] $NsiElement Элемент справочника верхнего уровня
     */
    public $NsiElement = null;

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return new \DateTime($this->Created);
    }
}