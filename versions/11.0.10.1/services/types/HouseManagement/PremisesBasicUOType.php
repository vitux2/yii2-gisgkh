<?php

namespace gisgkh\types\HouseManagement;

/**
 * Базовый тип помещения (для импорта от УО)
 */
class PremisesBasicUOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
{
    /**
     * Номер помещения
     * 
     * @var string
     */
     public $PremisesNum = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = [];

    /**
     * @param string $PremisesNum Номер помещения
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $PremisesNum = null, array $OGFData = [])
    {
        $this->PremisesNum = $PremisesNum;
        $this->OGFData = $OGFData;
    }
}