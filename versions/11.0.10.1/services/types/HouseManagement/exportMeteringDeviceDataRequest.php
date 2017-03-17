<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт ПУ
 */
class exportMeteringDeviceDataRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Идентификатор ПУ в ГИС ЖКХ 
     * 
     * @var string
     */
     public $MeteringDeviceRootGUID = null;

    /**
     * Идентификатор версии ПУ
     * 
     * @var string
     */
     public $MeteringDeviceVersionGUID = null;

    /**
     * Текущей организации
     * 
     * @var string
     */
     public $CurrentOrganization = null;

    /**
     * Идентификатор корневой сущности организации в реестре организаций
     * 
     * @var string[]
     */
     public $orgRootEntityGUID = [];

    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Дата модификации
     * 
     * @var string
     */
     public $UpdateDateTime = null;

    /**
     * Вид прибора учета (НСИ 27)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $MeteringDeviceType = null;

    /**
     * Коммунальный ресурс (НСИ 2)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $MunicipalResource = null;

    /**
     * Дата архивации «По»
     * 
     * @var string
     */
     public $ArchiveDateTo = null;

    /**
     * Дата архивации «С»
     * 
     * @var string
     */
     public $ArchiveDateFrom = null;

    /**
     * Выгружать архивированные
     * 
     * @var string
     */
     public $SearchArchived = null;

    /**
     * Дата ввода в эксплуатацию «По»
     * 
     * @var string
     */
     public $CommissioningDateTo = null;

    /**
     * Дата ввода в эксплуатацию «С»
     * 
     * @var string
     */
     public $CommissioningDateFrom = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param string $MeteringDeviceRootGUID Идентификатор ПУ в ГИС ЖКХ 
     * @param string $MeteringDeviceVersionGUID Идентификатор версии ПУ
     * @param string $CurrentOrganization Текущей организации
     * @param string[] $orgRootEntityGUID Идентификатор корневой сущности организации в реестре организаций
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$UpdateDateTime] Дата модификации
     * @param \gisgkh\types\NsiBase\nsiRef $MeteringDeviceType Вид прибора учета (НСИ 27)
     * @param \gisgkh\types\NsiBase\nsiRef $MunicipalResource Коммунальный ресурс (НСИ 2)
     * @param string [$ArchiveDateTo] Дата архивации «По»
     * @param string [$ArchiveDateFrom] Дата архивации «С»
     * @param string [$SearchArchived] Выгружать архивированные
     * @param string [$CommissioningDateTo] Дата ввода в эксплуатацию «По»
     * @param string [$CommissioningDateFrom] Дата ввода в эксплуатацию «С»
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $MeteringDeviceRootGUID = null, string $MeteringDeviceVersionGUID = null, string $CurrentOrganization = null, array $orgRootEntityGUID = [], string $FIASHouseGuid = null, string $UpdateDateTime = null, \gisgkh\types\NsiBase\nsiRef $MeteringDeviceType = null, \gisgkh\types\NsiBase\nsiRef $MunicipalResource = null, string $ArchiveDateTo = null, string $ArchiveDateFrom = null, string $SearchArchived = null, string $CommissioningDateTo = null, string $CommissioningDateFrom = null, $version = "11.0.0.1")
    {
        $this->MeteringDeviceRootGUID = $MeteringDeviceRootGUID;
        $this->MeteringDeviceVersionGUID = $MeteringDeviceVersionGUID;
        $this->CurrentOrganization = $CurrentOrganization;
        $this->orgRootEntityGUID = $orgRootEntityGUID;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->UpdateDateTime = $UpdateDateTime;
        $this->MeteringDeviceType = $MeteringDeviceType;
        $this->MunicipalResource = $MunicipalResource;
        $this->ArchiveDateTo = $ArchiveDateTo;
        $this->ArchiveDateFrom = $ArchiveDateFrom;
        $this->SearchArchived = $SearchArchived;
        $this->CommissioningDateTo = $CommissioningDateTo;
        $this->CommissioningDateFrom = $CommissioningDateFrom;
        $this->version = $version;
    }
}