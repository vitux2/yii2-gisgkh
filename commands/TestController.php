<?php

namespace startuplab\gisgkh\common\commands;

use gisgkh\FileService;
use gisgkh\HouseManagementService;
use gisgkh\NsiCommonService;
use gisgkh\OrganizationsRegistryCommonService;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_Contract;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType;
use gisgkh\types\lib\Nsi\nsiRef;
use startuplab\gisgkh\common\components\NsiFacade;
use startuplab\gisgkh\common\models\common\GisAttachment;
use startuplab\gisgkh\common\models\Houses\ResourceSupplyContract\ResourceSupplyContract;
use startuplab\gisgkh\common\models\Houses\ResourceSupplyContract\ResourceSupplyContractObject;
use startuplab\gisgkh\common\models\Houses\ResourceSupplyContract\ResourceSupplyContractRegistry;
use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectoryEntryLink;
use startuplab\gisgkh\common\models\Nsi\QualityIndicatorDirectory;
use startuplab\gisgkh\common\models\common\GisOrganization;
use startuplab\helpers\ArrayHelper;

/*use gisgkh\HouseManagementService;
use gisgkh\NsiSoapClient;
use gisgkh\OrgRegistrySoapClient;

use gisgkh\types\lib\Nsi\Attachment;
use gisgkh\types\lib\Nsi\AttachmentType;
use gisgkh\types\lib\Nsi\RegOrgType;
use gisgkh\types\NsiCommon\exportNsiListResult;
use gisgkh\types\HouseManagement\ContractSubjectType;
use gisgkh\types\HouseManagement\exportSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest;
use gisgkh\types\HouseManagement\importSupplyResourceContractRequest_Contract;
use gisgkh\types\HouseManagement\SupplyResourceContractType;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsNotContract;*/

class TestController extends \yii\console\Controller
{
    public function actionIndex()
    {
        /*$nsiFacade = new NsiFacade();

        $elements = $nsiFacade->getMunicipalServiceChargeableResources();

        print_r(ArrayHelper::toArray($elements));*/

//        $qualityIndicators = (new QualityIndicatorDirectory())->getEntries();
//        print_r(ArrayHelper::toArray($qualityIndicators));
//        die();

        /* RSO contract testing */
        /*$registry = new ResourceSupplyContractRegistry();
        $contracts = $registry->searchByNumber('тест');
        $contract = $contracts[0];
        $contract->number = 'Экспорт из РИАС №3';
        $contract->objects = [new ResourceSupplyContractObject(['fiasGuid' => '29569321-ffa6-45cc-9467-716b08040386'])];
        //$contract->contractType = ResourceSupplyContract::CONTRACT_TYPE_OWNER;
        //$contract->counterpartyType = ResourceSupplyContract::COUNTERPARTY_TYPE_ORGANIZATION;
        //$contract->organizationGuid = '05444f6c-9082-4a4f-b2e5-e042b45f4ae4';
        $contract->completionDate = new \DateTime('2020-11-11');
        //$contract->objects = null;
        //$contract->subjects = null;
        //$contract->attachments = null;

        $result = $registry->send($contract);
        print_r($contract);*/

        /* Attachment testing */
        /*$attachment = Attachment::upload('/home/dvp/host/Downloads/test.jpg', FileService::CONTEXT_AGREEMENTS);
        print_r($attachment);*/

        $organizations = GisOrganization::searchByOgrn('1037739877295');
        print_r(ArrayHelper::toArray($organizations));
    }

    public function actionGetSenderId($ogrn = '1037739877295')
    {
        $orgService = new OrganizationsRegistryCommonService();

        try {

            $response = $orgService->exportOrgRegistry($ogrn);
            $orgData = $response->OrgData;

            echo print_r($orgData);
        } catch (\SoapFault $e) {
            echo "Exception Error!\n\n";
            echo sprintf("Last request headers: %s\n", $orgService->__getLastRequestHeaders());
            echo sprintf("Last request: %s\n", $orgService->__getLastRequest());
            echo sprintf("Class: %s\n", get_class($e));
            echo sprintf("Message: %s\n", $e->getMessage());
        }
    }
    /*
        public function actionImportResourceSupplyContract()
        {
            $houseManagementService = new HouseManagementService();

            try {

                $contract = new SupplyResourceContractType();

                $contract->IsNotContract = new SupplyResourceContractType_IsNotContract();
                $contract->IsNotContract->ContractNumber = 'тест4';
                $contract->IsNotContract->SigningDate = (new \DateTime())->format('Y-m-d');
                $contract->IsNotContract->EffectiveDate = (new \DateTime())->format('Y-m-d');

                $attachmentInfo = new AttachmentType();
                $attachmentInfo->Name = 'Альбом ТФФ v.8.7.2.2. Приложение 1. Форматы электронных сообщений.docx';
                $attachmentInfo->Description = 'Альбом ТФФ v.8.7.2.2. Приложение 1. Форматы электронных сообщений.docx';
                $attachment = new Attachment();
                $attachment->AttachmentGUID = '78c89f66-8c73-4d55-a74b-b14118defb62';
                $attachmentInfo->AttachmentHASH = 'f9147d8dc141635eccc744d69ad1a49ff0c854305cb4c99c2c894f32480b4d1e';
                $attachmentInfo->Attachment = $attachment;

                $contract->IsNotContract->ContractAttachment = [$attachmentInfo];

                $contract->Offer = 'true';
                $contract->IsPlannedVolume = 'true';

                //$subject = new ContractSubjectType();
                //$subject->

                // и так далее...

                $contractRequest = new importSupplyResourceContractRequest_Contract();
                $contractRequest->SupplyResourceContract = $contract;


                $request = new importSupplyResourceContractRequest($contractRequest);

                $result = $houseManagementService->importSupplyResourceContractData($request);

                echo print_r($result);

            } catch (\SoapFault $e) {

                echo "Exception Error!\n\n";
                echo sprintf("Last request headers: %s\n", $houseManagementService->__getLastRequestHeaders());
                echo sprintf("Last request: %s\n", $houseManagementService->__getLastRequest());
                echo sprintf("Class: %s\n", get_class($e));
                echo sprintf("Message: %s\n", $e->getPrevious());
                echo sprintf("Last response: %s\n", $houseManagementService->__getLastResponseHeaders());

            }
        }

        public function actionExportResourceSupplyContract()
        {
            $houseManagementService = new HouseManagementService();

            try {
                $request = new exportSupplyResourceContractRequest();
                $request->ContractNumber = 'тес';
                $result = $houseManagementService->exportSupplyResourceContractData($request);

                echo print_r($result);
            } catch (\SoapFault $e) {
                echo "Exception Error!\n\n";
                echo sprintf("Last request headers: %s\n", $houseManagementService->__getLastRequestHeaders());
                echo sprintf("Last request: %s\n", $houseManagementService->__getLastRequest());
                echo sprintf("Class: %s\n", get_class($e));
                echo sprintf("Message: %s\n", $e->getMessage());
            }
        }*/
}