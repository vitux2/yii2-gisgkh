<?php

namespace gisgkh\types\HouseManagement\ImportResult;

/**
 * 
 */
class CommonResult extends \gisgkh\types\Base\CommonResultType
{
    /**
     * Расширенный ответ по импорту объекта жилищного фонда для УО
     * 
     * @var \gisgkh\types\HouseManagement\OGFImportStatusType
     */
     public $ImportHouseUO = null;

    /**
     * Расширенный ответ по импорту объекта жилищного фонда для РСО
     * 
     * @var \gisgkh\types\HouseManagement\OGFImportStatusType
     */
     public $ImportHouseRSO = null;

    /**
     * Расширенный ответ по импорту объекта жилищного фонда для ОМС
     * 
     * @var \gisgkh\types\HouseManagement\OGFImportStatusType
     */
     public $ImportHouseOMS = null;

    /**
     * Заполняется для операции importContract статусом размещения ДУ в ГИС ЖКХ
     * 
     * @var \gisgkh\types\HouseManagement\importContractResultType
     */
     public $importContract = null;

    /**
     * Заполняется для операции importCharter статусом размещения устава в ГИС ЖКХ
     * 
     * @var \gisgkh\types\HouseManagement\importCharterResultType
     */
     public $importCharter = null;

    /**
     * Заполняется для операции importMeteringDevice 
     * 
     * @var \gisgkh\types\HouseManagement\ImportResult\CommonResult\importMeteringDevice
     */
     public $importMeteringDevice = null;

    /**
     * Заполняется для операции importAccount
     * 
     * @var \gisgkh\types\HouseManagement\ImportResult\CommonResult\ImportAccount
     */
     public $ImportAccount = null;

    /**
     * @param \gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseUO Расширенный ответ по импорту объекта жилищного фонда для УО
     * @param \gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseRSO Расширенный ответ по импорту объекта жилищного фонда для РСО
     * @param \gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseOMS Расширенный ответ по импорту объекта жилищного фонда для ОМС
     * @param \gisgkh\types\HouseManagement\importContractResultType $importContract Заполняется для операции importContract статусом размещения ДУ в ГИС ЖКХ
     * @param \gisgkh\types\HouseManagement\importCharterResultType $importCharter Заполняется для операции importCharter статусом размещения устава в ГИС ЖКХ
     * @param \gisgkh\types\HouseManagement\ImportResult\CommonResult\importMeteringDevice $importMeteringDevice Заполняется для операции importMeteringDevice 
     * @param \gisgkh\types\HouseManagement\ImportResult\CommonResult\ImportAccount $ImportAccount Заполняется для операции importAccount
     */
    public function __construct(\gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseUO = null, \gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseRSO = null, \gisgkh\types\HouseManagement\OGFImportStatusType $ImportHouseOMS = null, \gisgkh\types\HouseManagement\importContractResultType $importContract = null, \gisgkh\types\HouseManagement\importCharterResultType $importCharter = null, \gisgkh\types\HouseManagement\ImportResult\CommonResult\importMeteringDevice $importMeteringDevice = null, \gisgkh\types\HouseManagement\ImportResult\CommonResult\ImportAccount $ImportAccount = null)
    {
        $this->ImportHouseUO = $ImportHouseUO;
        $this->ImportHouseRSO = $ImportHouseRSO;
        $this->ImportHouseOMS = $ImportHouseOMS;
        $this->importContract = $importContract;
        $this->importCharter = $importCharter;
        $this->importMeteringDevice = $importMeteringDevice;
        $this->ImportAccount = $ImportAccount;
    }
}