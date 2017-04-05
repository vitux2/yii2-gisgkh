<?php

namespace gisgkh\types\HouseManagement;

/**
 * Базовый тип помещения (для импорта от РСО)
 */
class PremisesBasicRSOType extends \gisgkh\types\HouseManagement\GKN_EGRP_KeyRSOType
{
    /**
     * Номер помещения
     * 
     * @var string
     */
     public $PremisesNum = null;

    /**
     * @param string $PremisesNum Номер помещения
     */
    public function __construct(string $PremisesNum = null)
    {
        $this->PremisesNum = $PremisesNum;
    }
}