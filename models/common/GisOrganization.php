<?php

namespace startuplab\gisgkh\common\models\common;

use gisgkh\OrganizationsRegistryCommonService;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\OrganizationsRegistry\LegalType;
use gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType;
use startuplab\gisgkh\common\exceptions\GisgkhRequestControlException;
use \startuplab\gisgkh\common\models\common\CompatibleWithGisgkh;
use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectoryEntryLink;

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
        exportOrgRegistryResultType::className();
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

        $this->roles = GisNsiDirectoryEntryLink::convertFromArray($source->organizationRoles);

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
     * Выполнить поиск организации в реестре ГИС ЖКХ по ОГРН
     * @param string $ogrn ОГРН
     * @return GisOrganization[]
     * @throws GisgkhRequestControlException
     */
    public static function searchByOgrn($ogrn)
    {
        $service = new OrganizationsRegistryCommonService(['exportOrgRegistryRequest', 'exportOrgRegistryResultType']);
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