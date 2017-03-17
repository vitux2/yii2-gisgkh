<?php

namespace gisgkh\types\HouseManagement\LivingHouseOMSType;

/**
 * Основные характеристики
 */
class BasicCharacteristicts extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Общая площадь
     * 
     * @var string
     */
     public $TotalSquare = null;

    /**
     * Состояние (НСИ 24)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $State = null;

    /**
     * Год ввода в эксплуатацию
     * 
     * @var string
     */
     public $UsedYear = null;

    /**
     * Количество этажей
     * 
     * @var string
     */
     public $FloorCount = null;

    /**
     * ОКТМО (обязательное для всех территорий, за исключением города и космодрома "Байконур"). Значение из ФИАС при наличии.
     * 
     * @var \gisgkh\types\Base\OKTMORefType
     */
     public $OKTMO = null;

    /**
     * Часовая зона
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $OlsonTZ = null;

    /**
     * Наличие у дома статуса объекта культурного наследия
     * 
     * @var string
     */
     public $CulturalHeritage = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = [];

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$TotalSquare] Общая площадь
     * @param \gisgkh\types\NsiBase\nsiRef [$State] Состояние (НСИ 24)
     * @param string [$UsedYear] Год ввода в эксплуатацию
     * @param string [$FloorCount] Количество этажей
     * @param \gisgkh\types\Base\OKTMORefType [$OKTMO] ОКТМО (обязательное для всех территорий, за исключением города и космодрома "Байконур"). Значение из ФИАС при наличии.
     * @param \gisgkh\types\NsiBase\nsiRef $OlsonTZ Часовая зона
     * @param string [$CulturalHeritage] Наличие у дома статуса объекта культурного наследия
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $FIASHouseGuid = null, string $TotalSquare = null, \gisgkh\types\NsiBase\nsiRef $State = null, string $UsedYear = null, string $FloorCount = null, \gisgkh\types\Base\OKTMORefType $OKTMO = null, \gisgkh\types\NsiBase\nsiRef $OlsonTZ = null, string $CulturalHeritage = null, array $OGFData = [])
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->TotalSquare = $TotalSquare;
        $this->State = $State;
        $this->UsedYear = $UsedYear;
        $this->FloorCount = $FloorCount;
        $this->OKTMO = $OKTMO;
        $this->OlsonTZ = $OlsonTZ;
        $this->CulturalHeritage = $CulturalHeritage;
        $this->OGFData = $OGFData;
    }
}