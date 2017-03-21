<?php

namespace gisgkh\types\HouseManagement;

/**
 * Основные характеристики ПУ
 */
class MeteringDeviceBasicCharacteristicsType
{
    /**
     * Заводской (серийный) номер ПУ
     * 
     * @var string
     */
     public $MeteringDeviceNumber = null;

    /**
     * Марка ПУ (обязательно для заполнения при импорте)
     * 
     * @var string
     */
     public $MeteringDeviceStamp = null;

    /**
     * Модель ПУ (обязательно для заполнения при импорте)
     * 
     * @var string
     */
     public $MeteringDeviceModel = null;

    /**
     * Дата установки
     * 
     * @var string
     */
     public $InstallationDate = null;

    /**
     * Дата ввода в эксплуатацию
     * 
     * @var string
     */
     public $CommissioningDate = null;

    /**
     * Наличие возможности дистанционного снятия показаний
     * 
     * @var string
     */
     public $RemoteMeteringMode = null;

    /**
     * Информация о наличии возможности дистанционного снятия показаний ПУ указанием наименования установленной системы (обязательно для заполнения, если tns:RemoteMeteringMode = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $RemoteMeteringInfo = null;

    /**
     * Дата последней поверки (поле обязательно для заполнения, если ПУ - коллективный (общедомовой))
     * 
     * @var string
     */
     public $FirstVerificationDate = null;

    /**
     * Межповерочный интервал (НСИ 16)  (поле обязательно для заполнения, если ПУ - коллективный (общедомовой))
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $VerificationInterval = null;

    /**
     * Дата опломбирования ПУ заводом-изготовителем (обязательно для заполнения при импорте)
     * 
     * @var string
     */
     public $FactorySealDate = null;

    /**
     * Наличие датчиков температры
     * 
     * @var string
     */
     public $TemperatureSensor = null;

    /**
     * Наличие датчиков давления
     * 
     * @var string
     */
     public $PressureSensor = null;

    /**
     * Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveDevice
     */
     public $CollectiveDevice = null;

    /**
     * Характеристики ИПУ жилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ResidentialPremiseDevice
     */
     public $ResidentialPremiseDevice = null;

    /**
     * Характеристики ИПУ нежилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\NonResidentialPremiseDevice
     */
     public $NonResidentialPremiseDevice = null;

    /**
     * Характеристики ИПУ жилого дома (значение справочника "Вид прибора учета" = индивидуальный, тип дома = жилой дом)
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ApartmentHouseDevice
     */
     public $ApartmentHouseDevice = null;

    /**
     * Характеристики комнатного ИПУ (значение справочника "Вид прибора учета" = Комнатный
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\LivingRoomDevice
     */
     public $LivingRoomDevice = null;

    /**
     * Характеристики общеквартирного ПУ (для квартир коммунального заселения) (значение справочника "Вид прибора учета" = Общий (квартирный))
     * 
     * @var \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveApartmentDevice
     */
     public $CollectiveApartmentDevice = null;

    /**
     * @param string $MeteringDeviceNumber Заводской (серийный) номер ПУ
     * @param string [$MeteringDeviceStamp] Марка ПУ (обязательно для заполнения при импорте)
     * @param string [$MeteringDeviceModel] Модель ПУ (обязательно для заполнения при импорте)
     * @param string [$InstallationDate] Дата установки
     * @param string $CommissioningDate Дата ввода в эксплуатацию
     * @param string $RemoteMeteringMode Наличие возможности дистанционного снятия показаний
     * @param string [$RemoteMeteringInfo] Информация о наличии возможности дистанционного снятия показаний ПУ указанием наименования установленной системы (обязательно для заполнения, если tns:RemoteMeteringMode = true, в противном случае поле не обрабатывается при импорте)
     * @param string [$FirstVerificationDate] Дата последней поверки (поле обязательно для заполнения, если ПУ - коллективный (общедомовой))
     * @param \gisgkh\types\NsiBase\nsiRef [$VerificationInterval] Межповерочный интервал (НСИ 16)  (поле обязательно для заполнения, если ПУ - коллективный (общедомовой))
     * @param string [$FactorySealDate] Дата опломбирования ПУ заводом-изготовителем (обязательно для заполнения при импорте)
     * @param string $TemperatureSensor Наличие датчиков температры
     * @param string $PressureSensor Наличие датчиков давления
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveDevice $CollectiveDevice Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ResidentialPremiseDevice $ResidentialPremiseDevice Характеристики ИПУ жилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\NonResidentialPremiseDevice $NonResidentialPremiseDevice Характеристики ИПУ нежилого помещения (значение справочника "Вид прибора учета" = индивидуальный)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ApartmentHouseDevice $ApartmentHouseDevice Характеристики ИПУ жилого дома (значение справочника "Вид прибора учета" = индивидуальный, тип дома = жилой дом)
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\LivingRoomDevice $LivingRoomDevice Характеристики комнатного ИПУ (значение справочника "Вид прибора учета" = Комнатный
     * @param \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveApartmentDevice $CollectiveApartmentDevice Характеристики общеквартирного ПУ (для квартир коммунального заселения) (значение справочника "Вид прибора учета" = Общий (квартирный))
     */
    public function __construct(string $MeteringDeviceNumber = null, string $MeteringDeviceStamp = null, string $MeteringDeviceModel = null, string $InstallationDate = null, string $CommissioningDate = null, string $RemoteMeteringMode = null, string $RemoteMeteringInfo = null, string $FirstVerificationDate = null, \gisgkh\types\NsiBase\nsiRef $VerificationInterval = null, string $FactorySealDate = null, string $TemperatureSensor = null, string $PressureSensor = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveDevice $CollectiveDevice = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ResidentialPremiseDevice $ResidentialPremiseDevice = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\NonResidentialPremiseDevice $NonResidentialPremiseDevice = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\ApartmentHouseDevice $ApartmentHouseDevice = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\LivingRoomDevice $LivingRoomDevice = null, \gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType\CollectiveApartmentDevice $CollectiveApartmentDevice = null)
    {
        $this->MeteringDeviceNumber = $MeteringDeviceNumber;
        $this->MeteringDeviceStamp = $MeteringDeviceStamp;
        $this->MeteringDeviceModel = $MeteringDeviceModel;
        $this->InstallationDate = $InstallationDate;
        $this->CommissioningDate = $CommissioningDate;
        $this->RemoteMeteringMode = $RemoteMeteringMode;
        $this->RemoteMeteringInfo = $RemoteMeteringInfo;
        $this->FirstVerificationDate = $FirstVerificationDate;
        $this->VerificationInterval = $VerificationInterval;
        $this->FactorySealDate = $FactorySealDate;
        $this->TemperatureSensor = $TemperatureSensor;
        $this->PressureSensor = $PressureSensor;
        $this->CollectiveDevice = $CollectiveDevice;
        $this->ResidentialPremiseDevice = $ResidentialPremiseDevice;
        $this->NonResidentialPremiseDevice = $NonResidentialPremiseDevice;
        $this->ApartmentHouseDevice = $ApartmentHouseDevice;
        $this->LivingRoomDevice = $LivingRoomDevice;
        $this->CollectiveApartmentDevice = $CollectiveApartmentDevice;
    }
}