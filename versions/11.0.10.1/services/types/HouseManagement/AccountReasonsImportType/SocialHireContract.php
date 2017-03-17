<?php

namespace gisgkh\types\HouseManagement\AccountReasonsImportType;

/**
 * 
 */
class SocialHireContract
{
    /**
     * Корневой идентификатор договора (не меняется от версии к версии)
     * 
     * @var string
     */
     public $ContractGUID = null;

    /**
     * Номер договора
     * 
     * @var string
     */
     public $ContractNumber = null;

    /**
     * Дата заключения
     * 
     * @var string
     */
     public $SigningDate = null;

    /**
     * Тип:
(D)WELLING_APARTMENT - Договор социального найма жилого помещения
STATE_(M)UNICIPAL_FUND - Договор найма жилого помещения государственного или муниципального жилищного фонда
(S)OCIAL_FUND - Договор найма жилого помещения жилищного фонда социального использования

     * 
     * @var string
     */
     public $Type = null;

    /**
     * @param string [$ContractGUID] Корневой идентификатор договора (не меняется от версии к версии)
     * @param string $ContractNumber Номер договора
     * @param string $SigningDate Дата заключения
     * @param string $Type Тип:
(D)WELLING_APARTMENT - Договор социального найма жилого помещения
STATE_(M)UNICIPAL_FUND - Договор найма жилого помещения государственного или муниципального жилищного фонда
(S)OCIAL_FUND - Договор найма жилого помещения жилищного фонда социального использования

     */
    public function __construct(string $ContractGUID = null, string $ContractNumber = null, string $SigningDate = null, string $Type = null)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ContractNumber = $ContractNumber;
        $this->SigningDate = $SigningDate;
        $this->Type = $Type;
    }
}