<?php

return [
    'baseXmlNamespace' => 'http://dom.gosuslugi.ru/schema/integration/base/',
    // Адреса endpoint сервисов
    'location' => [
        'NsiCommonService'                      => 'https://{IP}:{POR/ext-bus-nsi-common-service/services/NsiCommon',
        'OrganizationsRegistryCommonService'    => 'https://{IP}:{PORT}/ext-bus-org-registry-common-service/services/OrgRegistryCommon',
        'HouseManagementService'                => 'https://{IP}:{PORT}/ext-bus-home-management-service/services/HomeManagement'
    ],
    // Имена файлов WSDL схем
    'wsdl' => [
        'NsiCommonService'                      => '{SCHEMA_PATH}/nsi-common/hcs-nsi-common-service.wsdl',
        'OrganizationsRegistryCommonService'    => '{SCHEMA_PATH}/organizations-registry-common/hcs-organizations-registry-common-service.wsdl',
        'HouseManagementService'                => '{SCHEMA_PATH}/house-management/hcs-house-management-service.wsdl',
    ]
];
