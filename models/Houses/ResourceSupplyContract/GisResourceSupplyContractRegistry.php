<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\ErrorMessageType;
use gisgkh\services\HouseManagementService;
use gisgkh\types\HouseManagement\AnnulmentType;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResultType;
use gisgkh\types\HouseManagement\ImportResult;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\RollOverContract;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest\Contract\TerminateContract;
use opengkh\gis\exceptions\GisgkhRequestControlException;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use startuplab\helpers\GuidHelper;

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
        $service = new HouseManagementService();

        $request = new importSupplyResourceContractRequest();
        $request->Contract = new Contract();
        $request->Contract->TransportGUID = GuidHelper::generate();

        if ($contract->versionGuid) {
            $request->Contract->ContractGUID = $contract->versionGuid;
        }

        $request->Contract->SupplyResourceContract = $contract->convertTo();

        return $service->importSupplyResourceContractData($request);
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
        $request->Contract = new Contract();

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
        $request->Contract = new Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->TerminateContract = new TerminateContract();
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
        $request->Contract = new Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->RollOverContract = new RollOverContract();
        $request->Contract->RollOverContract->RollOverDate = $rollover_date;

        return $service->importSupplyResourceContractData($request);
    }
}