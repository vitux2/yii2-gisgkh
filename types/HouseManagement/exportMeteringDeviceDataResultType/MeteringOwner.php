<?php

namespace gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType;

/**
 * Организация, у которой прибор учета находится на праве собственности или на ином законном основании
 */
class MeteringOwner
{
    /**
     * Идентификатор корневой сущности организации в реестре организаций
     * 
     * @var string[]
     */
     public $orgRootEntityGUID = null;

    /**
     * @param string[] $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций
     */
    public function __construct(array $orgRootEntityGUID = null)
    {
        $this->orgRootEntityGUID = $orgRootEntityGUID;
    }
}