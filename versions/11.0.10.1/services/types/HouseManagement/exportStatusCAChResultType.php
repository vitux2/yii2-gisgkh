<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportStatusCAChResultType
{
    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Статус ДУ в ГИС ЖКХ:
Project - проект
ApprovalProcess - на утверждении
Rejected - отклонен
Approved - утвержден
Terminated - расторгнут
Reviewed - рассмотрен
Annul - сведения аннулированы
			
     * 
     * @var string
     */
     public $ContractStatus = null;

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
     * 
Состояние документа:
 Running - действующий
 NotRunning - не действующий
 Expired - истек срок действия
     * 
     * @var string
     */
     public $State = null;

    /**
     * Управляемый объект
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject[]
     */
     public $ContractObject = [];

    /**
     * Номер версии 
     * 
     * @var string
     */
     public $VersionNumber = null;

    /**
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param string $ContractStatus Статус ДУ в ГИС ЖКХ:
Project - проект
ApprovalProcess - на утверждении
Rejected - отклонен
Approved - утвержден
Terminated - расторгнут
Reviewed - рассмотрен
Annul - сведения аннулированы
			
     * @param string $CharterGUID Корневой идентификатор устава (не меняется от версии к версии)
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param string $CharterStatus Статус устава в ГИС ЖКХ:
 Project - проект
 Approved - утвержден
 Terminated - расторгнут/закрыт
 Annul - аннулирован
 Reviewed - рассмотрен
 ApprovalProcess - на утверждении
 Rejected - отклонен

     * @param string [$State] 
Состояние документа:
 Running - действующий
 NotRunning - не действующий
 Expired - истек срок действия
     * @param \gisgkh\types\HouseManagement\exportStatusCAChResultType\ContractObject[] [$ContractObject] Управляемый объект
     * @param string $VersionNumber Номер версии 
     */
    public function __construct(string $ContractGUID = null, string $ContractVersionGUID = null, string $ContractStatus = null, string $CharterGUID = null, string $CharterVersionGUID = null, string $CharterStatus = null, string $State = null, array $ContractObject = [], string $VersionNumber = null)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->ContractStatus = $ContractStatus;
        $this->CharterGUID = $CharterGUID;
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->CharterStatus = $CharterStatus;
        $this->State = $State;
        $this->ContractObject = $ContractObject;
        $this->VersionNumber = $VersionNumber;
    }
}