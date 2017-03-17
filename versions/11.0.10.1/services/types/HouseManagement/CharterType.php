<?php

namespace gisgkh\types\HouseManagement;

/**
 * Устав
 */
class CharterType
{
    /**
     * Дата регистрации TCН/ТСЖ/кооператива (Организации Поставщика данных)
     * 
     * @var string
     */
     public $Date = null;

    /**
     * Информация о сроках 
     * 
     * @var \gisgkh\types\HouseManagement\CharterDateDetailsType
     */
     public $DateDetails = null;

    /**
     * Протокол собрания собственников
     * 
     * @var \gisgkh\types\HouseManagement\CharterType\MeetingProtocol
     */
     public $MeetingProtocol = null;

    /**
     * Документы устава
     * 
     * @var \gisgkh\types\Base\AttachmentType[]
     */
     public $AttachmentCharter = [];

    /**
     * @param string $Date Дата регистрации TCН/ТСЖ/кооператива (Организации Поставщика данных)
     * @param \gisgkh\types\HouseManagement\CharterDateDetailsType [$DateDetails] Информация о сроках 
     * @param \gisgkh\types\HouseManagement\CharterType\MeetingProtocol $MeetingProtocol Протокол собрания собственников
     * @param \gisgkh\types\Base\AttachmentType[] $AttachmentCharter Документы устава
     */
    public function __construct(string $Date = null, \gisgkh\types\HouseManagement\CharterDateDetailsType $DateDetails = null, \gisgkh\types\HouseManagement\CharterType\MeetingProtocol $MeetingProtocol = null, array $AttachmentCharter = [])
    {
        $this->Date = $Date;
        $this->DateDetails = $DateDetails;
        $this->MeetingProtocol = $MeetingProtocol;
        $this->AttachmentCharter = $AttachmentCharter;
    }
}