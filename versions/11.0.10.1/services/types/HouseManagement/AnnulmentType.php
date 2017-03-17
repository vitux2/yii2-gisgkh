<?php

namespace gisgkh\types\HouseManagement;

/**
 * Аннулирование сведений
 */
class AnnulmentType
{
    /**
     * Причина аннулировани
     * 
     * @var string
     */
     public $ReasonOfAnnulment = null;

    /**
     * @param string $ReasonOfAnnulment Причина аннулировани
     */
    public function __construct(string $ReasonOfAnnulment = null)
    {
        $this->ReasonOfAnnulment = $ReasonOfAnnulment;
    }
}