<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class AccountType
{
    /**
     * Лицевой счет для оплаты за жилое помещение и коммунальные услуги
     * 
     * @var string
     */
     public $isUOAccount = null;

    /**
     * Лицевой счет для оплаты за коммунальные услуги.
     * 
     * @var string
     */
     public $isRSOAccount = null;

    /**
     * Лицевой счет для оплаты капитального ремонта
     * 
     * @var string
     */
     public $isCRAccount = null;

    /**
     * Лицевой счет РКЦ
     * 
     * @var string
     */
     public $isRCAccount = null;

    /**
     * Лицевой счет ОГВ/ОМС
     * 
     * @var string
     */
     public $isOGVorOMSAccount = null;

    /**
     * Дата начала действия ЛС
     * 
     * @var string
     */
     public $CreationDate = null;

    /**
     * Количество проживающих
     * 
     * @var string
     */
     public $LivingPersonsNumber = null;

    /**
     * Общая площадь для ЛС
     * 
     * @var string
     */
     public $TotalSquare = null;

    /**
     * Жилая площадь 
     * 
     * @var string
     */
     public $ResidentialSquare = null;

    /**
     * Отапливаемая площадь
     * 
     * @var string
     */
     public $HeatedArea = null;

    /**
     * Счет закрыт
     * 
     * @var \gisgkh\types\HouseManagement\ClosedAccountAttributesType
     */
     public $Closed = null;

    /**
     * Помещение
     * 
     * @var \gisgkh\types\HouseManagement\AccountType\Accommodation[]
     */
     public $Accommodation = [];

    /**
     * Сведения о платильщике
     * 
     * @var \gisgkh\types\HouseManagement\AccountType\PayerInfo
     */
     public $PayerInfo = null;

    /**
     * @param string $isUOAccount Лицевой счет для оплаты за жилое помещение и коммунальные услуги
     * @param string $isRSOAccount Лицевой счет для оплаты за коммунальные услуги.
     * @param string $isCRAccount Лицевой счет для оплаты капитального ремонта
     * @param string $isRCAccount Лицевой счет РКЦ
     * @param string $isOGVorOMSAccount Лицевой счет ОГВ/ОМС
     * @param string [$CreationDate] Дата начала действия ЛС
     * @param string [$LivingPersonsNumber] Количество проживающих
     * @param string [$TotalSquare] Общая площадь для ЛС
     * @param string [$ResidentialSquare] Жилая площадь 
     * @param string [$HeatedArea] Отапливаемая площадь
     * @param \gisgkh\types\HouseManagement\ClosedAccountAttributesType [$Closed] Счет закрыт
     * @param \gisgkh\types\HouseManagement\AccountType\Accommodation[] $Accommodation Помещение
     * @param \gisgkh\types\HouseManagement\AccountType\PayerInfo $PayerInfo Сведения о платильщике
     */
    public function __construct(string $isUOAccount = null, string $isRSOAccount = null, string $isCRAccount = null, string $isRCAccount = null, string $isOGVorOMSAccount = null, string $CreationDate = null, string $LivingPersonsNumber = null, string $TotalSquare = null, string $ResidentialSquare = null, string $HeatedArea = null, \gisgkh\types\HouseManagement\ClosedAccountAttributesType $Closed = null, array $Accommodation = [], \gisgkh\types\HouseManagement\AccountType\PayerInfo $PayerInfo = null)
    {
        $this->isUOAccount = $isUOAccount;
        $this->isRSOAccount = $isRSOAccount;
        $this->isCRAccount = $isCRAccount;
        $this->isRCAccount = $isRCAccount;
        $this->isOGVorOMSAccount = $isOGVorOMSAccount;
        $this->CreationDate = $CreationDate;
        $this->LivingPersonsNumber = $LivingPersonsNumber;
        $this->TotalSquare = $TotalSquare;
        $this->ResidentialSquare = $ResidentialSquare;
        $this->HeatedArea = $HeatedArea;
        $this->Closed = $Closed;
        $this->Accommodation = $Accommodation;
        $this->PayerInfo = $PayerInfo;
    }
}