<?php

namespace gisgkh\types\lib\Nsi;

/**
 * Составной тип. Наименование и значение поля типа "Ссылка на элемент внутреннего справочника" для элемента справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementNsiRefFieldType extends NsiElementFieldType
{
    /**
     * @var string $NsiItemRegistryNumber Реестровый номер справочника
     */
    public $NsiItemRegistryNumber = null;
    /* @return  integer */
    public function getNsiItemRegistryNumber() { return intval($this->NsiItemRegistryNumber); }
    /* @param integer $registryNumber */
    public function setNsiItemRegistryNumber($registryNumber) { $this->NsiItemRegistryNumber = strval($registryNumber); }

    /**
     * @var NsiElementNsiRefFieldType_NsiRef $NsiRef Ссылка на элемент справочника
     */
    public $NsiRef = null;
}