<?php

namespace gisgkh\types\HouseManagement\importHouseOMSRequest\LivingHouse;

/**
 * Изменение данных жилого дома
 */
class LivingHouseToUpdate extends \gisgkh\types\HouseManagement\LivingHouseUpdateOMSType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Cпособ управления домом (НСИ 25). Разрешено предавать параметр только в следующих случаях:
При отсутствии действующего договора управления/устава:
- Не выбран

     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $HouseManagementType = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\NsiBase\nsiRef [$HouseManagementType] Cпособ управления домом (НСИ 25). Разрешено предавать параметр только в следующих случаях:
При отсутствии действующего договора управления/устава:
- Не выбран

     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\NsiBase\nsiRef $HouseManagementType = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->HouseManagementType = $HouseManagementType;
    }
}