<?php

namespace opengkh\gis\interfaces\nsi\DynamicReference;

/**
 * Обобщенный интерфейс фабрики управления реестром справочников ГИС ЖКХ
 *
 * @package opengkh\gis\interfaces
 */
interface IDynamicReferenceManager
{
    /**
     * Получение справочника по реестровому номеру
     *
     * @param   integer     $registryNumber реестровый номер справочника
     * @return  IDynamicReference|null
     */
    public function getReferenceByRegistryNumber($registryNumber);

    /**
     * Добавить новый справочник
     *
     * @param   integer     $registryNumber реестровый номер справочника
     * @param   string      $name           наименование справочника
     * @return  IDynamicReference
     */
    public function createReference($registryNumber, $name);
}