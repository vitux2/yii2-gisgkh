<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\HouseManagementService;
use gisgkh\types\HouseManagement\AnnulmentType;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResultType;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_Contract;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_RollOverContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ContractSubject;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsNotContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ObjectAddress;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ObjectAddress_Pair;
use gisgkh\types\HouseManagement\SupplyResourceContractType_Period;
use gisgkh\types\HouseManagement\SupplyResourceContractType_Period_End;
use gisgkh\types\HouseManagement\SupplyResourceContractType_Period_Start;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ServiceType;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_TerminateContract;
use gisgkh\types\lib\CommonResultType;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\ImportResult;
use gisgkh\types\lib\Nsi\nsiRef;
use opengkh\gis\exceptions\GisgkhRequestControlException;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use opengkh\gis\models\Nsi\ContractTerminationReason;

/**
 * Работа с реестром договор ресурсоснабжения
 *
 * @package opengkh\gis\models\Houses
 */
class GisResourceSupplyContractRegistry
{
    /**
     * Поиск договоров ресурсоснабжения по номеру договора
     * @param string $number Номер договора (полностью или частично)
     * @return GisResourceSupplyContract[]
     * @throws GisgkhRequestControlException
     */
    public function searchByNumber($number)
    {
        $service = new HouseManagementService(['SupplyResourceContractType']);

        $request = new exportSupplyResourceContractRequest();
        $request->ContractNumber = $number;

        try {
            $result = $service->exportSupplyResourceContractData($request);
        } catch (\SoapFault $e) {
            echo $e->getMessage() . "\n";
            echo $service->__getLastRequest() . "\n";
            echo $service->__getLastResponse() . "\n";
            die();
        }

        // обработка возможных ошибок
        if ($result->ErrorMessage) {
            if ($result->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return [];
            } else {
                throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }

        return array_map(function (exportSupplyResourceContractResultType $gisContract) {
            return GisResourceSupplyContract::convertFrom($gisContract);
        }, $result->Contract);
    }

    /**
     * @param GisResourceSupplyContract $contract
     * @return ImportResult
     */
    public function send(GisResourceSupplyContract $contract)
    {
        //$service = new HouseManagementService(['SupplyResourceContractType', 'exportSupplyResourceContractRequest']);
        $service = new HouseManagementService();

        $request = new importSupplyResourceContractRequest();
        $request->Contract = new importSupplyResourceContractRequest_Contract();

        if ($contract->versionGuid) {
            $request->Contract->ContractGUID = $contract->versionGuid;
        }

        $request->Contract->SupplyResourceContract = $contract->convertTo();

        $response = $service->importSupplyResourceContractData($request);

        return $response;
    }

    /**
     * Аннулировать договор
     *
     * @param GisResourceSupplyContract $contract
     * @param string $reason Причина расторжения
     * @return ImportResult
     */
    public function annulled($contract, $reason)
    {
        $service = new HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Contract = new importSupplyResourceContractRequest_Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->AnnulmentContract = new AnnulmentType();
        $request->Contract->AnnulmentContract->ReasonOfAnnulment = $reason;

        return $service->importSupplyResourceContractData($request);
    }

    /**
     * Расторгнуть договор
     *
     * @param GisResourceSupplyContract $contract
     * @param string $date Фактическая дата расторжения
     * @param GisNsiDirectoryEntryLink $reason Причина расторжения
     * @return ImportResult
     */
    public function terminate($contract, $date, $reason)
    {
        $service = new HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Contract = new importSupplyResourceContractRequest_Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->TerminateContract = new importSupplyResourceContractRequest_TerminateContract();
        $request->Contract->TerminateContract->ReasonRef = $reason->convertTo();
        $request->Contract->TerminateContract->Terminate = $date;

        return $service->importSupplyResourceContractData($request);
    }

    /**
     * Пролонгировать договор
     *
     * @param GisResourceSupplyContract $contract
     * @param string $rollover_date Фактическая дата расторжения
     * @return ImportResult
     */
    public function rollover($contract, $rollover_date)
    {
        $service = new HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Contract = new importSupplyResourceContractRequest_Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->RollOverContract = new importSupplyResourceContractRequest_RollOverContract();
        $request->Contract->RollOverContract->RollOverDate = $rollover_date;

        return $service->importSupplyResourceContractData($request);
    }
}