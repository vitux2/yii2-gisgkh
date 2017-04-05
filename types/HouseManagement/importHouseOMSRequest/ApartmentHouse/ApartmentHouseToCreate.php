<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\ApartmentHouse;

/**
 * Добавление многоквартирного дома
 */
class ApartmentHouseToCreate extends \gisgkh\types\HouseManagement\ApartmentHouseOMSType
{
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
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef [$HouseManagementType] Cпособ управления домом (НСИ 25). Разрешено предавать параметр только в следующих случаях:
Для ОКОПФ организации, указанной в уставе, равен 85:
- ЖСК
- иной кооператив
При отсутствии действующего договора управления/устава:
- Не выбран
- Непосредственное управление.

     * @param string $TransportGUID Транспортный идентификатор
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $HouseManagementType = null, string $TransportGUID = null)
    {
        $this->HouseManagementType = $HouseManagementType;
        $this->TransportGUID = $TransportGUID;
    }
}