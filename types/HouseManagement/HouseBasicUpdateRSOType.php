<?php

namespace gisgkh\types\HouseManagement;

/**
 * Основные характеристики дома (обновление данных)
 */
class HouseBasicUpdateRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * ОКТМО. Только для ОКТМО не из ФИАС
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
     * @param \gisgkh\types\Base\OKTMORefType [$OKTMO] ОКТМО. Только для ОКТМО не из ФИАС
     * @param \gisgkh\types\NsiBase\nsiRef [$OlsonTZ] Часовая зона
     */
    public function __construct(string $FIASHouseGuid = null, \gisgkh\types\Base\OKTMORefType $OKTMO = null, \gisgkh\types\NsiBase\nsiRef $OlsonTZ = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->OKTMO = $OKTMO;
        $this->OlsonTZ = $OlsonTZ;
    }
}