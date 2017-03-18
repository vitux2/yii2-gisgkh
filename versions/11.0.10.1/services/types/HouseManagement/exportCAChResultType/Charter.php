<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType;

/**
 * Устав
 */
class Charter extends \gisgkh\types\HouseManagement\CharterType
{
    /**
     * Информация о прекращении действия устава
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\Terminate
     */
     public $Terminate = null;

    /**
     * Статус устава в ГИС ЖКХ:
 Project - проект
 Approved - утвержден
 Terminated - расторгнут/закрыт
 Annul - аннулирован
 Reviewed - рассмотрен
 ApprovalProcess - на утверждении
 Rejected - отклонен

     * 
     * @var string
     */
     public $CharterStatus = null;

    /**
     * Корневой идентификатор устава (не меняется от версии к версии)
     * 
     * @var string
     */
     public $CharterGUID = null;

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * Объект управления
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject[]
     */
     public $ContractObject = null;

    /**
     * Сведения о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Charter\CharterPaymentsInfo[]
     */
     public $CharterPaymentsInfo = null;

    /**
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\Terminate [$Terminate] Информация о прекращении действия устава
     * @param string $CharterStatus Статус устава в ГИС ЖКХ:
 Project - проект
 Approved - утвержден
 Terminated - расторгнут/закрыт
 Annul - аннулирован
 Reviewed - рассмотрен
 ApprovalProcess - на утверждении
 Rejected - отклонен

     * @param string $CharterGUID Корневой идентификатор устава (не меняется от версии к версии)
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\ContractObject[] $ContractObject Объект управления
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Charter\CharterPaymentsInfo[] [$CharterPaymentsInfo] Сведения о размере платы 
     */
    public function __construct(\gisgkh\types\HouseManagement\exportCAChResultType\Charter\Terminate $Terminate = null, string $CharterStatus = null, string $CharterGUID = null, string $CharterVersionGUID = null, array $ContractObject = null, array $CharterPaymentsInfo = null)
    {
        $this->Terminate = $Terminate;
        $this->CharterStatus = $CharterStatus;
        $this->CharterGUID = $CharterGUID;
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->ContractObject = $ContractObject;
        $this->CharterPaymentsInfo = $CharterPaymentsInfo;
    }
}