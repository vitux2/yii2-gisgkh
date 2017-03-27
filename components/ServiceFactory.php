<?php

namespace opengkh\gis\components;

use gisgkh\services\FileService;
use gisgkh\services\HouseManagementService;
use gisgkh\services\NsiCommonService;
use gisgkh\services\OrganizationsRegistryCommonService;
use yii\base\Component;
use opengkh\gis\Module;

/**
 * Фабрика сервисов ГИС ЖКХ
 */
class ServiceFactory extends Component
{
    public function FileService()
    {
        $module = Module::getInstance();

        return new FileService(
            $module->ip,
            $module->port,
            $module->orgPPAGUID,
            $module->username,
            $module->password,
            $module->sslCert,
            $module->sslKey,
            $module->caInfo
        );
    }

    /**
     * Сервис обмена сведениями о поставщиках информации
     * @return OrganizationsRegistryCommonService
     */
    public function OrganizationsRegistryCommonService()
    {
        $module = Module::getInstance();

        return new OrganizationsRegistryCommonService([
            "location" => "https://{$module->ip}:{$module->port}/ext-bus-org-registry-common-service/services/OrgRegistryCommon",
            "sslCert" => $module->sslCert,
            "sslKey" => $module->sslKey,
            "caInfo" => $module->caInfo,
            "username" => $module->username,
            "password" => $module->password
        ]);
    }

    public function NsiCommonService()
    {
        $module = Module::getInstance();

        return new NsiCommonService([
            "location" => "https://{$module->ip}:{$module->port}/ext-bus-nsi-common-service/services/NsiCommon",
            "sslCert" => $module->sslCert,
            "sslKey" => $module->sslKey,
            "caInfo" => $module->caInfo,
            "username" => $module->username,
            "password" => $module->password
        ]);
    }

    public function HouseManagementService()
    {
        $module = Module::getInstance();

        return new HouseManagementService([
            "location" => "https://{$module->ip}:{$module->port}/ext-bus-home-management-service/services/HomeManagement",
            "sslCert" => $module->sslCert,
            "sslKey" => $module->sslKey,
            "caInfo" => $module->caInfo,
            "username" => $module->username,
            "password" => $module->password,
            "orgPPAGUID" => $module->orgPPAGUID
        ]);
    }
}