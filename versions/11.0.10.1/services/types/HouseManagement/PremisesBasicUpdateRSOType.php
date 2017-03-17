<?php

namespace gisgkh\types\HouseManagement;

/**
 * Базовый тип помещения (обновление данных для РСО)
 */
class PremisesBasicUpdateRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Номер помещения
     * 
     * @var string
     */
     public $PremisesNum = null;

    /**
     * Дата прекращения существования объекта
     * 
     * @var string
     */
     public $TerminationDate = null;

    /**
     * @param string [$PremisesNum] Номер помещения
     * @param string [$TerminationDate] Дата прекращения существования объекта
     */
    public function __construct(string $PremisesNum = null, string $TerminationDate = null)
    {
        $this->PremisesNum = $PremisesNum;
        $this->TerminationDate = $TerminationDate;
    }
}