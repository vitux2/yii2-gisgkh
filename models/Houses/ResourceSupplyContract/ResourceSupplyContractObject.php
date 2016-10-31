<?php

namespace startuplab\gisgkh\common\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\ObjectAddressType;
use startuplab\gisgkh\common\models\common\CompatibleWithGisgkh;

/**
 * Объект жилищного фонда в договоре ресурсоснабжения
 * @package startuplab\gisgkh\common\models\Houses
 */
class ResourceSupplyContractObject extends CompatibleWithGisgkh
{
    /**
     * @var string $fiasGuid Глобальный уникальный идентификатор дома по ФИАС
     */
    public $fiasGuid = null;

    /**
     * @var static $apartmentNumber Номер квартиры (помещения)
     */
    public $apartmentNumber = null;

    /**
     * @var static $roomNumber Номер комнаты (указывается в случае квартиры коммунального заселения)
     */
    public $roomNumber = null;

    /**
     * @inheritDoc
     * @param ObjectAddressType $source
     */
    function fillFrom($source)
    {
        $this->fiasGuid = $source->FIASHouseGuid;
        $this->apartmentNumber = $source->ApartmentNumber;
        $this->roomNumber = $source->RoomNumber;
        return $this;
    }

    /**
     * @inheritDoc
     * @param ObjectAddressType $target
     */
    function fillTo(&$target)
    {
        $target->FIASHouseGuid = $this->fiasGuid;
        $target->ApartmentNumber = $this->apartmentNumber;
        $target->RoomNumber = $this->roomNumber;
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return ObjectAddressType::className();
    }
}