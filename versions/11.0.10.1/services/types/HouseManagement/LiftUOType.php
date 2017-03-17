<?php

namespace gisgkh\types\HouseManagement;

/**
 * Лифт (для импорта от УО)
 */
class LiftUOType
{
    /**
     * Номер подъезда
     * 
     * @var string
     */
     public $EntranceNum = null;

    /**
     * ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * 
     * @var string
     */
     public $FIASChildHouseGuid = null;

    /**
     * Заводской номер
     * 
     * @var string
     */
     public $FactoryNum = null;

    /**
     * Тип лифта. Ссылка на НСИ "Тип лифта" (реестровый номер 192)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $Type = null;

    /**
     * Предельный срок эксплуатации
     * 
     * @var string
     */
     public $OperatingLimit = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = [];

    /**
     * @param string $EntranceNum Номер подъезда
     * @param string [$FIASChildHouseGuid] ГУИД дочернего дома по ФИАС, к которому относится подъезд для группирующих домов
     * @param string $FactoryNum Заводской номер
     * @param \gisgkh\types\NsiBase\nsiRef $Type Тип лифта. Ссылка на НСИ "Тип лифта" (реестровый номер 192)
     * @param string [$OperatingLimit] Предельный срок эксплуатации
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $EntranceNum = null, string $FIASChildHouseGuid = null, string $FactoryNum = null, \gisgkh\types\NsiBase\nsiRef $Type = null, string $OperatingLimit = null, array $OGFData = [])
    {
        $this->EntranceNum = $EntranceNum;
        $this->FIASChildHouseGuid = $FIASChildHouseGuid;
        $this->FactoryNum = $FactoryNum;
        $this->Type = $Type;
        $this->OperatingLimit = $OperatingLimit;
        $this->OGFData = $OGFData;
    }
}