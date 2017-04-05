<?php

namespace gisgkh\types\HouseManagement\importNotificationRequest\notification;

/**
 * Создание, редактирование новости
 */
class Create
{
    /**
     * Тема
     * 
     * @var string
     */
     public $Topic = null;

    /**
     * Высокая важность новости
     * 
     * @var string
     */
     public $IsImportant = null;

    /**
     * Текст новости
     * 
     * @var string
     */
     public $content = null;

    /**
     * Все дома (в адресатах)
     * 
     * @var string
     */
     public $IsAll = null;

    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string[]
     */
     public $FIASHouseGuid = null;

    /**
     * Собственник помещений в МКД
     * 
     * @var \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners
     */
     public $RoomOwners = null;

    /**
     * Идентификатор организации-владельца специального счета
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType[]
     */
     public $SpecialAccountOwner = null;

    /**
     * Идентификатор организации-органа государственного надзора
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgType[]
     */
     public $InspectionAuthority = null;

    /**
     * Не ограничено 
     * 
     * @var string
     */
     public $IsNotLimit = null;

    /**
     * В период "С"
     * 
     * @var string
     */
     public $StartDate = null;

    /**
     * В период "До"
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Документы новости
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $Attachment = null;

    /**
     * Направить новость адресатам
     * 
     * @var string
     */
     public $IsShipOff = null;

    /**
     * @param string $Topic Тема
     * @param string [$IsImportant] Высокая важность новости
     * @param string [$content] Текст новости
     * @param string $IsAll Все дома (в адресатах)
     * @param string[] $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners $RoomOwners Собственник помещений в МКД
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType[] $SpecialAccountOwner Идентификатор организации-владельца специального счета
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgType[] $InspectionAuthority Идентификатор организации-органа государственного надзора
     * @param string $IsNotLimit Не ограничено 
     * @param string [$StartDate] В период "С"
     * @param string $EndDate В период "До"
     * @param \gisgkh\types\Base\AttachmentType[] [$Attachment] Документы новости
     * @param string [$IsShipOff] Направить новость адресатам
     */
    public function __construct(string $Topic = null, string $IsImportant = null, string $content = null, string $IsAll = null, array $FIASHouseGuid = null, \gisgkh\types\HouseManagement\importNotificationRequest\notification\Create\RoomOwners $RoomOwners = null, array $SpecialAccountOwner = null, array $InspectionAuthority = null, string $IsNotLimit = null, string $StartDate = null, string $EndDate = null, array $Attachment = null, string $IsShipOff = null)
    {
        $this->Topic = $Topic;
        $this->IsImportant = $IsImportant;
        $this->content = $content;
        $this->IsAll = $IsAll;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->RoomOwners = $RoomOwners;
        $this->SpecialAccountOwner = $SpecialAccountOwner;
        $this->InspectionAuthority = $InspectionAuthority;
        $this->IsNotLimit = $IsNotLimit;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->Attachment = $Attachment;
        $this->IsShipOff = $IsShipOff;
    }
}