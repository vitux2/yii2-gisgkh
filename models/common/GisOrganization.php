<?php

namespace opengkh\gis\models\common;

use gisgkh\services\OrganizationsRegistryCommonService;
use gisgkh\ErrorMessageType;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType;
use opengkh\gis\exceptions\GisgkhRequestControlException;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use opengkh\gis\Module;

/**
 * Организация (юр. лицо, обособленное подпазделение либо ИП)
 */
class GisOrganization extends CompatibleWithGisgkh
{
    /* вид организации */
    const TYPE_LEGAL = 'legal'; // юр. лицо
    const TYPE_SUBSIDIARY = 'subsidiary'; // обособленное подразделение
    const TYPE_ENTRP = 'entrp'; // индивидуальный предприниматель

    /* @var string $type вид организации (юл. лицо, подразделение или ИП)*/
    public $type = null;

    /* @var string $rootGuid */
    public $rootGuid = null;
    /* @var string $versionGuid */
    public $versionGuid = null;
    /* @var string $ppaGuid */
    public $ppaGuid = null;

    /* @var string $shortName */
    public $shortName = null;
    /* @var string $fullName */
    public $fullName = null;
    /* @var string $ogrn */
    public $ogrn = null;
    /* @var string $kpp */
    public $kpp = null;
    /* @var string $inn */
    public $inn = null;
    /* @var string $okopf */
    public $okopf = null;
    /* @var string $address */
    public $address = null;
    /* @var GisNsiDirectoryEntryLink[] $roles */
    public $roles = [];

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        exportOrgRegistryResultType::class;
    }

    /**
     * @inheritDoc
     * @param exportOrgRegistryResultType $source
     */
    function fillFrom($source)
    {
        $this->rootGuid = $source->orgRootEntityGUID;
        $this->versionGuid = $source->OrgVersion->orgVersionGUID;
        $this->ppaGuid = $source->orgPPAGUID;

        $roles = GisNsiDirectoryEntryLink::convertFromArray($source->organizationRoles);
        foreach ($roles as $role) {
            $this->roles[$role->code] = $role;
        }

        if (!empty($source->OrgVersion->Legal)) {
            $this->shortName = $source->OrgVersion->Legal->ShortName;
            $this->fullName = $source->OrgVersion->Legal->FullName;
            $this->ogrn = $source->OrgVersion->Legal->OGRN;
            $this->inn = $source->OrgVersion->Legal->INN;
            $this->kpp = $source->OrgVersion->Legal->KPP;
            $this->okopf = $source->OrgVersion->Legal->OKOPF;
            $this->address = $source->OrgVersion->Legal->Address;
            $this->type = self::TYPE_LEGAL;
        } elseif (!empty($source->OrgVersion->Subsidiary)) {
            $this->shortName = $source->OrgVersion->Subsidiary->ShortName;
            $this->fullName = $source->OrgVersion->Subsidiary->FullName;
            $this->ogrn = $source->OrgVersion->Subsidiary->OGRN;
            $this->inn = $source->OrgVersion->Subsidiary->INN;
            $this->kpp = $source->OrgVersion->Subsidiary->KPP;
            $this->okopf = $source->OrgVersion->Subsidiary->OKOPF;
            $this->address = $source->OrgVersion->Subsidiary->Address;
            $this->type = self::TYPE_SUBSIDIARY;
        } elseif (!empty($source->OrgVersion->Entrp)) {
            $this->shortName = $source->OrgVersion->Entrp->Surname . ' ' . $source->OrgVersion->Entrp->FirstName;
            $this->fullName = $source->OrgVersion->Entrp->Surname . ' ' . $source->OrgVersion->Entrp->Patronymic . ' ' . $source->OrgVersion->Entrp->FirstName;
            $this->ogrn = $source->OrgVersion->Entrp->OGRNIP;
            $this->inn = $source->OrgVersion->Entrp->INN;
            $this->type = self::TYPE_ENTRP;
        }
    }

    /**
     * @inheritDoc
     * @param exportOrgRegistryResultType $source
     */
    function fillTo(&$target)
    {
        // TODO: Implement fillTo() method.
    }

    /**
     * Выполнить поиск организации в реестре ГИС по идентификатору
     * @param string $rootGuid
     * @param string|null $versionGuid
     * @return null|GisOrganization
     * @throws GisgkhRequestControlException
     */
    public static function getByGuid($rootGuid, $versionGuid = null)
    {
        $service = Module::getInstance()->serviceFactory->OrganizationsRegistryCommonService();
        $result = $service->exportOrgRegistry(null, null, null, true, $versionGuid, $rootGuid);

        // обработка возможных ошибок
        if ($result->ErrorMessage) {
            if ($result->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return null;
            } else {
                throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }
        /* @var self[] $orgs */
        $orgs = self::convertFromArray($result->OrgData);

        return @$orgs[0];
    }

    /**
     * Выполнить поиск организации в реестре ГИС ЖКХ по ОГРН(ИП)
     * @param string $ogrn ОГРН(ИП)
     * @param string $kpp КПП
     * @return GisOrganization|null
     * @throws GisgkhRequestControlException
     */
    public static function getByOgrnAndKpp($ogrn, $kpp)
    {
        $service = Module::getInstance()->serviceFactory->OrganizationsRegistryCommonService();

        $args = [$ogrn, $kpp];

        if (strlen($ogrn) === 15) {
            $args = [null, null, $ogrn];
        }

        $result = call_user_func_array([$service, 'exportOrgRegistry'], $args);

        // обработка возможных ошибок
        if ($result->ErrorMessage) {
            if ($result->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return null;
            } else {
                throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }
        /* @var self[] $orgs */
        $orgs = self::convertFromArray($result->OrgData);

        return @$orgs[0];
    }

    /**
     * Выполнить поиск организации в реестре ГИС ЖКХ по ОГРН
     * @param string $ogrn ОГРН
     * @return static[]
     * @throws GisgkhRequestControlException
     */
    public static function searchByOgrn($ogrn)
    {
        $service = Module::getInstance()->serviceFactory->OrganizationsRegistryCommonService();
        $result = $service->exportOrgRegistry($ogrn);

        // обработка возможных ошибок
        if ($result->ErrorMessage) {
            if ($result->ErrorMessage->ErrorCode == ErrorMessageType::ERROR_CODE_EMPTY_COLLECTION) {
                return null;
            } else {
                throw new GisgkhRequestControlException($result->ErrorMessage);
            }
        }

        return self::convertFromArray($result->OrgData);
    }
}