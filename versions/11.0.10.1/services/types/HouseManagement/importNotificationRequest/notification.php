<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest;

/**
 * 
 */
class notification
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор новости  в ГИС ЖКХ 
     * 
     * @var string
     */
     public $NotificationGUID = null;

    /**
     * Создание, редактирование новости
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create
     */
     public $Create = null;

    /**
     * Направить новость адресатам
     * 
     * @var string
     */
     public $IsShipOff = null;

    /**
     * Удаление  новости
     * 
     * @var \gisgkh\types\HouseManagement\DeleteDocType
     */
     public $DeleteNotification = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$NotificationGUID] Идентификатор новости  в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create $Create Создание, редактирование новости
     * @param string $IsShipOff Направить новость адресатам
     * @param \gisgkh\types\HouseManagement\DeleteDocType $DeleteNotification Удаление  новости
     */
    public function __construct(string $TransportGUID = null, string $NotificationGUID = null, \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create $Create = null, string $IsShipOff = null, \gisgkh\types\HouseManagement\DeleteDocType $DeleteNotification = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->NotificationGUID = $NotificationGUID;
        $this->Create = $Create;
        $this->IsShipOff = $IsShipOff;
        $this->DeleteNotification = $DeleteNotification;
    }
}