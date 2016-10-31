<?php

namespace opengkh\gis\interfaces\nsi\DynamicReference;

/**
 * Обобщенный интерфейс "справочник ГИС ЖКХ"
 */
interface IDynamicReference
{
    /* *
     * Метаданные справочника
     * ************************************************************************************************************** */

    /**
     * Реестровый номер справочника
     * @return integer
     */
    public function getRegistryNumber();

    /**
     * Название справочника
     * @return string
     */
    public function getName();

    /**
     * Изменить наименование справочника
     * @param string $name
     */
    public function setName($name);

    /**
     * Дата последней модификации
     * @return \DateTime|null
     */
    public function getModifiedAt();

    /**
     * Установить дату последней модификации
     * @param \DateTime $modifiedAt
     */
    public function setModifiedAt($modifiedAt);

    /* *
     * Элементы справочника (строки)
     * ************************************************************************************************************** */

    /**
     * Получить элемент по коду
     * @param string $code код элемента
     * @return IDynamicElement
     */
    public function getElementByCode($code);

    /**
     * Создать новый элемент справочника
     * @param string $code код элемента
     * @param string $guid глобально-уникальный идентификатор элемента
     * @return IDynamicElement
     */
    public function createElement($code, $guid);
}