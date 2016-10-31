<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\HouseManagementService;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResultType;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_Contract;
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
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\Nsi\nsiRef;
use opengkh\gis\exceptions\GisgkhRequestControlException;

/**
 * Работа с реестром договор ресурсоснабжения
 *
 * @package opengkh\gis\models\Houses
 */
class ResourceSupplyContractRegistry
{
    /**
     * Поиск договоров ресурсоснабжения по номеру договора
     * @param string $number Номер договора (полностью или частично)
     * @return ResourceSupplyContract[]
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
            return ResourceSupplyContract::convertFrom($gisContract);
        }, $result->Contract);
    }

    /**
     * @param ResourceSupplyContract $contract
     */
    public function send(ResourceSupplyContract $contract)
    {
        $service = new HouseManagementService(['SupplyResourceContractType', 'importSupplyResourceContractRequest']);

        $request = new importSupplyResourceContractRequest();
        $request->Contract = new importSupplyResourceContractRequest_Contract();

        $request->Contract->SupplyResourceContract = $contract->convertTo();;
        //print_r($request);
//        die();

        try {
            $response = $service->importSupplyResourceContractData($request);
        } catch (\SoapFault $e) {
            echo $e->getMessage() . "\n";
            echo $service->__getLastRequest() . "\n";
            echo $service->__getLastResponse() . "\n";
            die();
        }

        // обработка возможных ошибок
        if ($response->ErrorMessage) {
            if ($response->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return [];
            } else {
                print_r($service->__getLastRequest());
                print_r($response->ErrorMessage);
                die();
                //throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }

        return $response->CommonResult;
    }
}