<?php

namespace gisgkh\types\HouseManagement;

/**
 * Протокол ОСС
 */
class ProtocolType
{
    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Номер протокола
     * 
     * @var string
     */
     public $ProtocolNum = null;

    /**
     * Дата составления протокола
     * 
     * @var string
     */
     public $ProtocolDate = null;

    /**
     * Заочное голосование (опросным путем)
     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\AVoting
     */
     public $AVoting = null;

    /**
     * Очное голосование

     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\Meeting
     */
     public $Meeting = null;

    /**
     * Заочное голосование с использованием системы
     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\EVoting
     */
     public $EVoting = null;

    /**
     * Очное-заочное голосование

     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\MeetingAVoting
     */
     public $MeetingAVoting = null;

    /**
     * Внеочередное собрание
     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\ExtraVoting
     */
     public $ExtraVoting = null;

    /**
     * Ежегодное собрание
     * 
     * @var string
     */
     public $AnnualVoting = null;

    /**
     * Правомочность собрания
Допустимые значения
(C)OMPETENT - Правомочно (имеет кворум)
(N)OT_COMPETENT- Не правомочно (кворум отсутствует)

     * 
     * @var string
     */
     public $MeetingEligibility = null;

    /**
     * Повестка
     * 
     * @var \gisgkh\types\HouseManagement\ProtocolType\DecisionList[]
     */
     public $DecisionList = [];

    /**
     * Основание изменения. Заполняется для протоколов ОСС в статусе "Размещен"
     * 
     * @var string
     */
     public $Modification = null;

    /**
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string [$ProtocolNum] Номер протокола
     * @param string $ProtocolDate Дата составления протокола
     * @param \gisgkh\types\HouseManagement\ProtocolType\AVoting $AVoting Заочное голосование (опросным путем)
     * @param \gisgkh\types\HouseManagement\ProtocolType\Meeting $Meeting Очное голосование

     * @param \gisgkh\types\HouseManagement\ProtocolType\EVoting $EVoting Заочное голосование с использованием системы
     * @param \gisgkh\types\HouseManagement\ProtocolType\MeetingAVoting $MeetingAVoting Очное-заочное голосование

     * @param \gisgkh\types\HouseManagement\ProtocolType\ExtraVoting $ExtraVoting Внеочередное собрание
     * @param string $AnnualVoting Ежегодное собрание
     * @param string $MeetingEligibility Правомочность собрания
Допустимые значения
(C)OMPETENT - Правомочно (имеет кворум)
(N)OT_COMPETENT- Не правомочно (кворум отсутствует)

     * @param \gisgkh\types\HouseManagement\ProtocolType\DecisionList[] $DecisionList Повестка
     * @param string [$Modification] Основание изменения. Заполняется для протоколов ОСС в статусе "Размещен"
     */
    public function __construct(string $FIASHouseGuid = null, string $ProtocolNum = null, string $ProtocolDate = null, \gisgkh\types\HouseManagement\ProtocolType\AVoting $AVoting = null, \gisgkh\types\HouseManagement\ProtocolType\Meeting $Meeting = null, \gisgkh\types\HouseManagement\ProtocolType\EVoting $EVoting = null, \gisgkh\types\HouseManagement\ProtocolType\MeetingAVoting $MeetingAVoting = null, \gisgkh\types\HouseManagement\ProtocolType\ExtraVoting $ExtraVoting = null, string $AnnualVoting = null, string $MeetingEligibility = null, array $DecisionList = [], string $Modification = null)
    {
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->ProtocolNum = $ProtocolNum;
        $this->ProtocolDate = $ProtocolDate;
        $this->AVoting = $AVoting;
        $this->Meeting = $Meeting;
        $this->EVoting = $EVoting;
        $this->MeetingAVoting = $MeetingAVoting;
        $this->ExtraVoting = $ExtraVoting;
        $this->AnnualVoting = $AnnualVoting;
        $this->MeetingEligibility = $MeetingEligibility;
        $this->DecisionList = $DecisionList;
        $this->Modification = $Modification;
    }
}