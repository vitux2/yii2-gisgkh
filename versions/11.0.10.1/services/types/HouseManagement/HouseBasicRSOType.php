<?php

namespace gisgkh\types\HouseManagement;

/**
 * Основные характеристики дома
 */
class HouseBasicRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

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
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param \gisgkh\types\Base\OKTMORefType [$OKTMO] ОКТМО (обязательное для всех территорий, за исключением города и космодрома "Байконур"). Значение из ФИАС при наличии.
     * @param \gisgkh\types\NsiBase\nsiRef $OlsonTZ Часовая зона
     */
    public function __construct(string $FIASHouseGuid = null, \gisgkh\types\Base\OKTMORefType $OKTMO = null, \gisgkh\types\NsiBase\nsiRef $OlsonTZ = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->OKTMO = $OKTMO;
        $this->OlsonTZ = $OlsonTZ;
    }
}