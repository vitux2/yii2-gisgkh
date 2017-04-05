<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportMeteringDeviceDataResultType extends \gisgkh\types\HouseManagement\MeteringDeviceFullInformationType
{
    /**
     * Идентификатор ПУ в ГИС ЖКХ 
     * 
     * @var string
     */
     public $MeteringDeviceRootGUID = null;

    /**
     * Статус сущности
Допустимые значения:
Active-Активный
Archival-Архивный
     * 
     * @var string
     */
     public $StatusRootDoc = null;

    /**
     * Идентификатор версии ПУ
     * 
     * @var string
     */
     public $MeteringDeviceVersionGUID = null;

    /**
     * Номер версии 
     * 
     * @var string
     */
     public $VersionNumber = null;

    /**
     * Статус версии 
     * 
     * @var string
     */
     public $StatusVersion = null;

    /**
     * Дата модификации
     * 
     * @var string
     */
     public $UpdateDateTime = null;

    /**
     * Организация, у которой прибор учета находится на праве собственности или на ином законном основании
     * 
     * @var \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType\MeteringOwner
     */
     public $MeteringOwner = null;

    /**
     * Номер прибора учета в ГИС ЖКХ
     * 
     * @var string
     */
     public $MeteringDeviceGISGKHNumber = null;

    /**
     * @param string $MeteringDeviceRootGUID Идентификатор ПУ в ГИС ЖКХ 
     * @param string $StatusRootDoc Статус сущности
Допустимые значения:
Active-Активный
Archival-Архивный
     * @param string $MeteringDeviceVersionGUID Идентификатор версии ПУ
     * @param string $VersionNumber Номер версии 
     * @param string $StatusVersion Статус версии 
     * @param string $UpdateDateTime Дата модификации
     * @param \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType\MeteringOwner $MeteringOwner Организация, у которой прибор учета находится на праве собственности или на ином законном основании
     * @param string $MeteringDeviceGISGKHNumber Номер прибора учета в ГИС ЖКХ
     */
    public function __construct(string $MeteringDeviceRootGUID = null, string $StatusRootDoc = null, string $MeteringDeviceVersionGUID = null, string $VersionNumber = null, string $StatusVersion = null, string $UpdateDateTime = null, \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType\MeteringOwner $MeteringOwner = null, string $MeteringDeviceGISGKHNumber = null)
    {
        $this->MeteringDeviceRootGUID = $MeteringDeviceRootGUID;
        $this->StatusRootDoc = $StatusRootDoc;
        $this->MeteringDeviceVersionGUID = $MeteringDeviceVersionGUID;
        $this->VersionNumber = $VersionNumber;
        $this->StatusVersion = $StatusVersion;
        $this->UpdateDateTime = $UpdateDateTime;
        $this->MeteringOwner = $MeteringOwner;
        $this->MeteringDeviceGISGKHNumber = $MeteringDeviceGISGKHNumber;
    }
}