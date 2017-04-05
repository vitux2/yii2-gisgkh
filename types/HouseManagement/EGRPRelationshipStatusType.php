<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class EGRPRelationshipStatusType
{
    /**
     * Статус связи объекта с ЕГРП:
(C)reated - найдена запись в ЕГРП, доля(и)/обремененения(и) создана(ы)
(D)roped - связь с долей/обремененением  разорвана
(N)o relationship - связь с долей/обремененением не устанавливалась
     * 
     * @var string
     */
     public $Status = null;

    /**
     * @param string [$Status] Статус связи объекта с ЕГРП:
(C)reated - найдена запись в ЕГРП, доля(и)/обремененения(и) создана(ы)
(D)roped - связь с долей/обремененением  разорвана
(N)o relationship - связь с долей/обремененением не устанавливалась
     */
    public function __construct(string $Status = null)
    {
        $this->Status = $Status;
    }
}