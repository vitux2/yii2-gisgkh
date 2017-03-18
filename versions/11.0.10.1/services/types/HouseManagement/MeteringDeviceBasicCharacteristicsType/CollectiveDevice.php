<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceBasicCharacteristicsType;

/**
 * Характеристики общедомового ПУ (значение справочника "Тип прибора учета" = коллективный (общедомомвой))
 */
class CollectiveDevice
{
    /**
     * Информация о наличии датчиков температуры с указанием их местоположения на узле учета (обязательно для заполнения, если tns:TemperatureSensor = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $TemperatureSensingElementInfo = null;

    /**
     * Информация о наличии датчиков давления с указанием их местоположения на узле учета (обязательно для заполнения, если tns:PressureSensor = true, в противном случае поле не обрабатывается при импорте)
     * 
     * @var string
     */
     public $PressureSensingElementInfo = null;

    /**
     * Электронный образ проекта узла учета
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $ProjectRegistrationNode = null;

    /**
     * Электронный образ акта ввода узла учета в эксплуатацию
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $Certificate = null;

    /**
     * @param string [$TemperatureSensingElementInfo] Информация о наличии датчиков температуры с указанием их местоположения на узле учета (обязательно для заполнения, если tns:TemperatureSensor = true, в противном случае поле не обрабатывается при импорте)
     * @param string [$PressureSensingElementInfo] Информация о наличии датчиков давления с указанием их местоположения на узле учета (обязательно для заполнения, если tns:PressureSensor = true, в противном случае поле не обрабатывается при импорте)
     * @param \gisgkh\types\Base\AttachmentType[] [$ProjectRegistrationNode] Электронный образ проекта узла учета
     * @param \gisgkh\types\Base\AttachmentType[] [$Certificate] Электронный образ акта ввода узла учета в эксплуатацию
     */
    public function __construct(string $TemperatureSensingElementInfo = null, string $PressureSensingElementInfo = null, array $ProjectRegistrationNode = null, array $Certificate = null)
    {
        $this->TemperatureSensingElementInfo = $TemperatureSensingElementInfo;
        $this->PressureSensingElementInfo = $PressureSensingElementInfo;
        $this->ProjectRegistrationNode = $ProjectRegistrationNode;
        $this->Certificate = $Certificate;
    }
}