<?php

namespace gisgkh\types\HouseManagement;

/**
 * Возврат статуса отправленного сообщения
 */
class getStateResult extends \gisgkh\types\Base\BaseAsyncResponseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Статус обработки импорта данных при синхронном обмене
     * 
     * @var \gisgkh\types\HouseManagement\ImportResult[]
     */
     public $ImportResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportHouseResultType
     */
     public $exportHouseResult = null;

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType[]
     */
     public $exportMeteringDeviceDataResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChResultType[]
     */
     public $exportStatusCAChResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChResultType[]
     */
     public $exportCAChResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType[]
     */
     public $exportStatusPublicPropertyContractResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountResultType[]
     */
     public $exportAccountResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportVotingProtocolResultType[]
     */
     public $exportVotingProtocolResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType[]
     */
     public $exportSupplyResourceContractResult = [];

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportAccountIndividualServicesResultType[]
     */
     public $exportAccountIndividualServicesResult = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param \gisgkh\types\HouseManagement\ImportResult[] $ImportResult Статус обработки импорта данных при синхронном обмене
     * @param \gisgkh\types\HouseManagement\exportHouseResultType $exportHouseResult 
     * @param \gisgkh\types\HouseManagement\exportMeteringDeviceDataResultType[] $exportMeteringDeviceDataResult 
     * @param \gisgkh\types\HouseManagement\exportStatusCAChResultType[] [$exportStatusCAChResult] 
     * @param \gisgkh\types\HouseManagement\exportCAChResultType[] [$exportCAChResult] 
     * @param \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType[] $exportStatusPublicPropertyContractResult 
     * @param \gisgkh\types\HouseManagement\exportAccountResultType[] $exportAccountResult 
     * @param \gisgkh\types\HouseManagement\exportVotingProtocolResultType[] $exportVotingProtocolResult 
     * @param \gisgkh\types\HouseManagement\exportSupplyResourceContractResultType[] $exportSupplyResourceContractResult 
     * @param \gisgkh\types\HouseManagement\exportAccountIndividualServicesResultType[] [$exportAccountIndividualServicesResult] 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, array $ImportResult = [], \gisgkh\types\HouseManagement\exportHouseResultType $exportHouseResult = null, array $exportMeteringDeviceDataResult = [], array $exportStatusCAChResult = [], array $exportCAChResult = [], array $exportStatusPublicPropertyContractResult = [], array $exportAccountResult = [], array $exportVotingProtocolResult = [], array $exportSupplyResourceContractResult = [], array $exportAccountIndividualServicesResult = [], $version = "11.0.0.1")
    {
        $this->ErrorMessage = $ErrorMessage;
        $this->ImportResult = $ImportResult;
        $this->exportHouseResult = $exportHouseResult;
        $this->exportMeteringDeviceDataResult = $exportMeteringDeviceDataResult;
        $this->exportStatusCAChResult = $exportStatusCAChResult;
        $this->exportCAChResult = $exportCAChResult;
        $this->exportStatusPublicPropertyContractResult = $exportStatusPublicPropertyContractResult;
        $this->exportAccountResult = $exportAccountResult;
        $this->exportVotingProtocolResult = $exportVotingProtocolResult;
        $this->exportSupplyResourceContractResult = $exportSupplyResourceContractResult;
        $this->exportAccountIndividualServicesResult = $exportAccountIndividualServicesResult;
        $this->version = $version;
    }
}