<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт новости для информирования граждан
 */
class importNotificationRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification[]
     */
     public $notification = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification[] $notification 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $notification = [], $version = "10.0.1.1")
    {
        $this->notification = $notification;
        $this->version = $version;
    }
}