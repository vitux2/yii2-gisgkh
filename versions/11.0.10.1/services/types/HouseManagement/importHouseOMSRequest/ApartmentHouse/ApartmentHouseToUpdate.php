<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Изменение данных многоквартирного дома
 */
class ApartmentHouseToUpdate extends \gisgkh\types\HouseManagement\ApartmentHouseUpdateOMSType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Cпособ управления домом (НСИ 25). Разрешено предавать параметр только в следующих случаях:
Для ОКОПФ организации, указанной в уставе, равен 85:
- ЖСК
- иной кооператив
При отсутствии действующего договора управления/устава:
- Не выбран
- Непосредственное управление.

     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $HouseManagementType = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\NsiBase\nsiRef [$HouseManagementType] Cпособ управления домом (НСИ 25). Разрешено предавать параметр только в следующих случаях:
Для ОКОПФ организации, указанной в уставе, равен 85:
- ЖСК
- иной кооператив
При отсутствии действующего договора управления/устава:
- Не выбран
- Непосредственное управление.

     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\NsiBase\nsiRef $HouseManagementType = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->HouseManagementType = $HouseManagementType;
    }
}