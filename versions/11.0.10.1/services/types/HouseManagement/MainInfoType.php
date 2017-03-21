<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class MainInfoType
{
    /**
     * Номер документа
     * 
     * @var string
     */
     public $DocNum = null;

    /**
     * @param string $DocNum Номер документа
     */
    public function __construct(string $DocNum = null)
    {
        $this->DocNum = $DocNum;
    }
}