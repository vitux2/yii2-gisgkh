<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт сведений устава
 */
class importCharterRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Создание, редактирование устава
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter
     */
     public $PlacingCharter = null;

    /**
     * Внесение изменений в версию устава
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\EditCharter
     */
     public $EditCharter = null;

    /**
     * Продление срока оказания услуг
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\RollOverCharter
     */
     public $RollOverCharter = null;

    /**
     * Прекращение действия устава
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\TerminateCharter
     */
     public $TerminateCharter = null;

    /**
     * Аннулирование устава
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharter
     */
     public $AnnulmentCharter = null;

    /**
     * Размещение сведений о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\PlaceCharterPaymentsInfo
     */
     public $PlaceCharterPaymentsInfo = null;

    /**
     * Аннулирование сведений о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharterPaymentsInfo
     */
     public $AnnulmentCharterPaymentsInfo = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter $PlacingCharter Создание, редактирование устава
     * @param \gisgkh\types\HouseManagement\importCharterRequest\EditCharter $EditCharter Внесение изменений в версию устава
     * @param \gisgkh\types\HouseManagement\importCharterRequest\RollOverCharter $RollOverCharter Продление срока оказания услуг
     * @param \gisgkh\types\HouseManagement\importCharterRequest\TerminateCharter $TerminateCharter Прекращение действия устава
     * @param \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharter $AnnulmentCharter Аннулирование устава
     * @param \gisgkh\types\HouseManagement\importCharterRequest\PlaceCharterPaymentsInfo $PlaceCharterPaymentsInfo Размещение сведений о размере платы 
     * @param \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharterPaymentsInfo $AnnulmentCharterPaymentsInfo Аннулирование сведений о размере платы 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\importCharterRequest\PlacingCharter $PlacingCharter = null, \gisgkh\types\HouseManagement\importCharterRequest\EditCharter $EditCharter = null, \gisgkh\types\HouseManagement\importCharterRequest\RollOverCharter $RollOverCharter = null, \gisgkh\types\HouseManagement\importCharterRequest\TerminateCharter $TerminateCharter = null, \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharter $AnnulmentCharter = null, \gisgkh\types\HouseManagement\importCharterRequest\PlaceCharterPaymentsInfo $PlaceCharterPaymentsInfo = null, \gisgkh\types\HouseManagement\importCharterRequest\AnnulmentCharterPaymentsInfo $AnnulmentCharterPaymentsInfo = null, $version = "10.0.1.1")
    {
        $this->TransportGUID = $TransportGUID;
        $this->PlacingCharter = $PlacingCharter;
        $this->EditCharter = $EditCharter;
        $this->RollOverCharter = $RollOverCharter;
        $this->TerminateCharter = $TerminateCharter;
        $this->AnnulmentCharter = $AnnulmentCharter;
        $this->PlaceCharterPaymentsInfo = $PlaceCharterPaymentsInfo;
        $this->AnnulmentCharterPaymentsInfo = $AnnulmentCharterPaymentsInfo;
        $this->version = $version;
    }
}