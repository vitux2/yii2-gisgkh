<?php

namespace opengkh\gis\interfaces\nsi\DynamicReference;

use gisgkh\types\lib\nsi\NsiElementFieldType;

/**
 * Обобщенный интерфейс "элемент (строка) справочника ГИС ЖКХ"
 */
interface IDynamicElement
{
    /**
     * Код элемента (порядковый номер в справочнике)
     * @return integer
     */
    public function getCode();

    /**
     * Глобальный идентификатор версии элемента
     * @return string
     */
    public function getGuid();

    /**
     * Признак актуальности элемента
     * @return boolean
     */
    public function getIsActual();

    /**
     * Установить признак актуальности элемента
     * @param boolean $isActual
     */
    public function setIsActual($isActual);

    /**
     * Дата последней модификации элемента
     * @return \DateTime
     */
    public function getModifiedAt();

    /**
     * Установить дату последней модификации элемента
     * @param \DateTime $modifiedAt
     */
    public function setModifiedAt($modifiedAt);

    /**
     * Дака начала действия элемента (если применимо)
     * @return \DateTime|null
     */
    public function getEffectiveDate();

    /**
     * Установить дату начала действия элемента
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate($effectiveDate);

    /**
     * Дата окончания действия элемента (если применимо)
     * @return \DateTime|null
     */
    public function getExpiryDate();

    /**
     * Установить дату окончания действия элемента
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate($expiryDate);

    /**
     * Установить родительский элемент
     * @param IDynamicElement $element
     */
    public function setParentElement($element);

    /**
     * Архивировать элемент справочника
     */
    public function archive();

    /**
     * Установить перечень полей
     * @param NsiElementFieldType[] $fields
     */
    public function setFields($fields);
}