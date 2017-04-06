<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\ErrorMessageType;
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
use opengkh\gis\models\common\Guid;
use opengkh\gis\Module;

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
        $service = Module::getInstance()->serviceFactory->HouseManagementService();

        $request = new exportSupplyResourceContractRequest();
        $request->Id = (string)(new Guid());
        $request->ContractNumber = $number;

        $result = $service->exportSupplyResourceContractData($request);

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
        $service = Module::getInstance()->serviceFactory->HouseManagementService();

        $request = new importSupplyResourceContractRequest();
        $request->Id = (string)(new Guid());
        $request->Contract = new Contract();
        $request->Contract->TransportGUID = (string)(new Guid());

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
        $service = Module::getInstance()->serviceFactory->HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Id = (string)(new Guid());
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
        $service = Module::getInstance()->serviceFactory->HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Id = (string)(new Guid());
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
        $service = Module::getInstance()->serviceFactory->HouseManagementService();
        $request = new importSupplyResourceContractRequest();
        $request->Id = (string)(new Guid());
        $request->Contract = new Contract();

        $request->Contract->ContractGUID = $contract->versionGuid;
        $request->Contract->RollOverContract = new RollOverContract();
        $request->Contract->RollOverContract->RollOverDate = $rollover_date;

        return $service->importSupplyResourceContractData($request);
    }
}