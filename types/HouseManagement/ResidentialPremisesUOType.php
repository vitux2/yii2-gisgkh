<?php

namespace gisgkh\types\HouseManagement;

/**
 * Жилое помещение (для импорта от УО)
 */
class ResidentialPremisesUOType extends \gisgkh\types\HouseManagement\PremisesBasicUOType
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
     * Жилая площадь жилого помещения по паспорту помещения
     * 
     * @var string
     */
     public $GrossArea = null;

    /**
     * Отсутствует значение жилой площади
     * 
     * @var string
     */
     public $NoGrossArea = null;

    /**
     * @param string $EntranceNum Номер подъезда
     * @param string $HasNoEntrance Признак отсутствия подезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic Характеристика помещения (НСИ 30)
     * @param string $TotalArea Общая площадь жилого помещения по паспорту помещения
     * @param string $GrossArea Жилая площадь жилого помещения по паспорту помещения
     * @param string $NoGrossArea Отсутствует значение жилой площади
     */
    public function __construct(string $EntranceNum = null, string $HasNoEntrance = null, string $FIASChildHouseGuid = null, \gisgkh\types\NsiBase\nsiRef $PremisesCharacteristic = null, string $TotalArea = null, string $GrossArea = null, string $NoGrossArea = null)
    {
        $this->EntranceNum = $EntranceNum;
        $this->HasNoEntrance = $HasNoEntrance;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->PremisesCharacteristic = $PremisesCharacteristic;
        $this->TotalArea = $TotalArea;
        $this->GrossArea = $GrossArea;
        $this->NoGrossArea = $NoGrossArea;
    }
}