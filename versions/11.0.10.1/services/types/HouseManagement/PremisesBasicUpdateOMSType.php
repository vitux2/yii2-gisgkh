<?php

namespace gisgkh\types\HouseManagement;

/**
 * Базовый тип помещения (обновление данных для ОМС)
 */
class PremisesBasicUpdateOMSType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyType
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
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string [$PremisesNum] Номер помещения
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $PremisesNum = null, array $OGFData = [], string $TerminationDate = null)
    {
        $this->PremisesNum = $PremisesNum;
        $this->OGFData = $OGFData;
        $this->TerminationDate = $TerminationDate;
    }
}