<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилое помещение (обновление данных для РСО)
 */
class ResidentialPremisesUpdateRSOType extends \gisgkh\types\HouseManagement\PremisesBasicUpdateRSOType
{
    /**
     * Номер подъезда
     * 
     * @var string
     */
     public $EntranceNum = null;

    /**
     * Признак отсутствия подезда
     * 
     * @var string
     */
     public $HasNoEntrance = null;

    /**
     * ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * 
     * @var string
     */
     public $FIASChildHouseGuid = null;

    /**
     * Характеристика помещения (НСИ 30)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $PremisesCharacteristic = null;

    /**
     * Общая площадь жилого помещения по паспорту помещения
     * 
     * @var string
     */
     public $TotalArea = null;

    /**
     * @param string $EntranceNum Номер подъезда
     * @param string $HasNoEntrance Признак отсутствия подезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param \gisgkh\types\NsiBase\nsiRef [$PremisesCharacteristic] Характеристика помещения (НСИ 30)
     * @param string [$TotalArea] Общая площадь жилого помещения по паспорту помещения
     */
    public function __construct(string $EntranceNum = null, string $HasNoEntrance = null, string $FIASChildHouseGuid = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null)
    {
        $this->EntranceNum = $EntranceNum;
        $this->HasNoEntrance = $HasNoEntrance;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
    }
}