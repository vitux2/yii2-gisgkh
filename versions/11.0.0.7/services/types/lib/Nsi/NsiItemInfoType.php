<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Информация о справочнике
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiItemInfoType extends GisgkhType
{
    /**
     * @var string $RegistryNumber Реестровый номер справочника. Код не более 10 символов
     */
    public $RegistryNumber = null;

    /**
     * @var string $Name Наименование справочника. Строка не более 200 символов. (по WSDL схеме ограничение 2500)
     */
    public $Name = null;

    /**
     * @var string $Modified Дата и время последнего изменения справочника. W3C формат
     */
    public $Modified = null;

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return new \DateTime($this->Modified);
    }
}