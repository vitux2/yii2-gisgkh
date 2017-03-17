<?php

namespace gisgkh\types\HouseManagement\exportCAChResultType;

/**
 * ДУ
 */
class Contract extends \gisgkh\types\HouseManagement\ContractType
{
    /**
     * Информация о расторжении ДУ
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Contract\Terminate
     */
     public $Terminate = null;

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
     * Объект управления
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Contract\ContractObject[]
     */
     public $ContractObject = [];

    /**
     * Сведения о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType\Contract\ContractPaymentsInfo[]
     */
     public $ContractPaymentsInfo = [];

    /**
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Contract\Terminate [$Terminate] Информация о расторжении ДУ
     * @param string $ContractStatus Статус ДУ в ГИС ЖКХ:
Project - проект
ApprovalProcess - на утверждении
Rejected - отклонен
Approved - утвержден
Terminated - расторгнут
Reviewed - рассмотрен
Annul - сведения аннулированы
			
     * @param string $ContractGUID Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Contract\ContractObject[] $ContractObject Объект управления
     * @param \gisgkh\types\HouseManagement\exportCAChResultType\Contract\ContractPaymentsInfo[] [$ContractPaymentsInfo] Сведения о размере платы 
     */
    public function __construct(\gisgkh\types\HouseManagement\exportCAChResultType\Contract\Terminate $Terminate = null, string $ContractStatus = null, string $ContractGUID = null, string $ContractVersionGUID = null, array $ContractObject = [], array $ContractPaymentsInfo = [])
    {
        $this->Terminate = $Terminate;
        $this->ContractStatus = $ContractStatus;
        $this->ContractGUID = $ContractGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->ContractObject = $ContractObject;
        $this->ContractPaymentsInfo = $ContractPaymentsInfo;
    }
}