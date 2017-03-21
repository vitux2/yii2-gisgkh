<?php

namespace gisgkh\types\HouseManagement;

/**
 * Базовый тип помещения (для экспорта)
 */
class PremisesBasicExportType extends \gisgkh\types\HouseManagement\OGFExportStatusType
{
    /**
     * Номер помещения
     * 
     * @var string
     */
     public $PremisesNum = null;

    /**
     * Этаж
     * 
     * @var string
     */
     public $Floor = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = null;

    /**
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string [$PremisesNum] Номер помещения
     * @param string [$Floor] Этаж
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $PremisesNum = null, string $Floor = null, array $OGFData = null, string $TerminationDate = null)
    {
        $this->PremisesNum = $PremisesNum;
        $this->Floor = $Floor;
        $this->OGFData = $OGFData;
        $this->TerminationDate = $TerminationDate;
    }
}