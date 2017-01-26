<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\DRSOIndType;
use gisgkh\types\HouseManagement\exportSupplyResourceContractResultType;
use gisgkh\types\HouseManagement\HeatingSystemType;
use gisgkh\types\HouseManagement\Quality;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ContractSubject;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsContract;
use gisgkh\types\HouseManagement\SupplyResourceContractType_IsNotContract;
use gisgkh\types\HouseManagement\Owner;
use gisgkh\types\HouseManagement\SupplyResourceContractType;

use gisgkh\types\HouseManagement\SupplyResourceContractType_ObjectAddress;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ObjectAddress_Pair;
use gisgkh\types\HouseManagement\SupplyResourceContractType_Organization;
use gisgkh\types\lib\Nsi\nsiRef;
use gisgkh\types\lib\OrganizationsRegistry\RegOrgType;
use opengkh\gis\exceptions\GisgkhDataExtractionException;
use opengkh\gis\models\common\GisAttachment;
use opengkh\gis\models\common\CompatibleWithGisgkh;
use opengkh\gis\models\common\GisDayOfMonth;
use opengkh\gis\models\common\GisPerson;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;

/**
 * Договор ресурсоснабжения
 *
 * @package opengkh\gis\models\Houses
 */
class GisResourceSupplyContract extends CompatibleWithGisgkh
{
    // вид договора
    const CONTRACT_TYPE_OFFER   = 'offer';  // договор-оферта
    const CONTRACT_TYPE_MC      = 'mc';     // договор с управляющей организацей
    const CONTRACT_TYPE_OWNER   = 'owner';  // прямой договор собственником/пользователем объекта недвижимости

    // вид второй стороны договра (в случае, если договор заключен напрямую с собственником/пользователем)
    const COUNTERPARTY_TYPE_ORGANIZATION    = 'organization';
    const COUNTERPARTY_TYPE_PERSON          = 'person';

    // вид объекта недвижимости (в случае, если договор заключен напрямую с собственником/пользователем)
    const PROPERTY_TYPE_LIVING_HOUSE        = 'living_house';       // жилой дом
    const PROPERTY_TYPE_APARTMENT_BUILDING  = 'apartment_building'; // помещение в многоквартирном доме

    /* @var string $rootGuid */
    public $rootGuid = null;

    /* @var string $versionGuid */
    public $versionGuid = null;

    /* @var string $contractType Вид договора (договор-оферта / договор с УО / прямой договор) */
    public $contractType = null;

    /* @var string $counterpartyType Вид второй стороны договора (организация / частное лицо) */
    public $counterpartyType = null;

    /* @var string Вид объекта недвижимости (МКД / ЖД) */
    public $propertyType = null;

    /* @var string $managementCompanyGuid orgRootEntityGUID УО в ГИС ЖКХ */
    public $managementCompanyGuid = null;

    /* @var string $organizationGuid orgRootEntityGUID организации в ГИС ЖКХ */
    public $organizationGuid = null;

    /* @var GisPerson $person */
    public $person = null;

    /* @var bool $noContract Договор является публичным и/или отсутствует заключенный на бумажном носителе или в электронной форме */
    public $noContract = null;

    /* @var string $number */
    public $number = null;

    /* @var \DateTime $signingDate */
    public $signingDate = null;

    /* @var \DateTime $effectiveDate */
    public $effectiveDate = null;

    /* @var GisAttachment[] $attachments*/
    public $attachments = [];

    /* @var \DateTime|null $completionDate Дата окончания действия */
    public $completionDate = null;

    /* @var GisNsiDirectoryEntryLink|null Основание заключения договора. Слылка на элемент справочника */
    public $base = null;

    /* @var GisReadingsDeliveryPeriod $readingsDeliveryPeriod */
    public $readingsDeliveryPeriod = null;

    /* @var GisBilingDay $billingDay Срок выставления платежных документов, не позднее (день месяца, следующего за расчетным) */
    public $billingDay = null;

    /* @var GisBilingDay $paymentDay Срок внесения платы, не позднее (день месяца, следующего за расчетным) */
    public $paymentDay = null;

    /* @var GisBilingDay $providingInformationDay Срок предоставления информации о поступивших платежах (день месяца, следующего за расчетным) */
    public $providingInformationDay = null;

    /* @var boolean $isPlannedVolume */
    public $isPlannedVolume = false;

    /* @var GisResourceSupplyContractSubject[] $subjects */
    public $subjects = [];

    /* @var GisResourceSupplyContractObject[] $objects Объекты жилищного фонда */
    public $objects = [];

    /* @var boolean $commonQualityIndicators показатели качества указываются в разрезе договора */
    public $commonQualityIndicators = true;

    /* @var boolean $heatingSystemIsClosed закрытая система теплоснабжения */
    public $heatingSystemIsClosed = false;

    /* @var boolean $heatingSystemIsClosed децентрализованная система теплоснабжения */
    public $heatingSystemIsDecentralized = false;

    /**
     * @inheritdoc
     * @param exportSupplyResourceContractResultType $source
     * @return $this
     */
    public function fillFrom($source)
    {
        $this->rootGuid = $source->ContractRootGUID;
        $this->versionGuid = $source->ContractGUID;

        /* @var SupplyResourceContractType_IsContract $contractMeta */
        $contractMeta = null;
        if (!empty($source->IsContract)) {
            $contractMeta = $source->IsContract;
            $this->noContract = false;
        } else {
            $contractMeta = $source->IsNotContract;
            $this->noContract = true;
        }
        $this->number = $contractMeta->ContractNumber;
        $this->signingDate = $contractMeta->getSigningDate();
        $this->effectiveDate = $contractMeta->getEffectiveDate();
        $this->attachments = GisAttachment::convertFromArray($contractMeta->ContractAttachment);

        /* @var Owner $owner */
        $owner = null;
        if ($source->Offer) {
            $this->contractType = static::CONTRACT_TYPE_OFFER;
        } elseif ($source->Organization) {
            $this->contractType = static::CONTRACT_TYPE_MC;
            $this->managementCompanyGuid = $source->Organization->orgRootEntityGUID;
        } elseif ($source->ApartmentBuildingOwner) {
            $this->contractType = static::CONTRACT_TYPE_OWNER;
            $this->propertyType = static::PROPERTY_TYPE_APARTMENT_BUILDING;
            $owner = $source->ApartmentBuildingOwner;
        } elseif ($source->LivingHouseOwner) {
            $this->contractType = static::CONTRACT_TYPE_OWNER;
            $this->propertyType = static::PROPERTY_TYPE_LIVING_HOUSE;
            $owner = $source->LivingHouseOwner;
        } else {
            throw new GisgkhDataExtractionException('ДРСО: ошибка определения контрагента');
        }

        if (!empty($owner)) {
            if ($owner->RegOrg) {
                $this->counterpartyType = static::COUNTERPARTY_TYPE_ORGANIZATION;
                $this->organizationGuid = $owner->RegOrg->orgRootEntityGUID;
            } elseif ($owner->Ind) {
                $this->counterpartyType = static::COUNTERPARTY_TYPE_PERSON;
                $this->person = GisPerson::convertFrom($owner->Ind);
            }
        }

        if (!empty($source->ContractBase)) {
            $this->base = GisNsiDirectoryEntryLink::convertFrom($source->ContractBase);
        }

        $this->completionDate = $source->getCompletionDate();
        $this->isPlannedVolume = $source->getIsPlannedVolume();

        $this->readingsDeliveryPeriod = GisReadingsDeliveryPeriod::convertFrom($source->Period);
        $this->billingDay = GisBilingDay::convertFrom($source->BillingDate);
        $this->paymentDay = GisBilingDay::convertFrom($source->PaymentDate);
        $this->providingInformationDay = GisBilingDay::convertFrom($source->ProvidingInformationDate);

        $this->subjects = array_map(function (SupplyResourceContractType_ContractSubject $gisSubject) use ($source) {
            $subject = GisResourceSupplyContractSubject::convertFrom($gisSubject);
            if ($source->Quality)
            foreach ($source->Quality as $quality) {
                if ($quality->PairKey == $gisSubject->TransportGUID) {
                    $subject->qualityIndicators[] = GisQualityIndicator::convertFrom($quality);
                }
            }
            return $subject;
        }, $source->ContractSubject);
        $this->objects = GisResourceSupplyContractObject::convertFromArray($source->ObjectAddress);

        $this->commonQualityIndicators = $source->SpecifyingQualityIndicators == 'D' ? true : false;

        return $this;
    }

    /**
     * @inheritdoc
     * @param SupplyResourceContractType $target
     */
    public function fillTo(&$target)
    {
        if ($this->noContract) {
            $target->IsNotContract = new SupplyResourceContractType_IsNotContract(
                $this->number,
                $this->signingDate,
                $this->effectiveDate,
                GisAttachment::convertToArray($this->attachments)
            );
        } else {
            $target->IsContract = new SupplyResourceContractType_IsContract(
                $this->number,
                $this->signingDate,
                $this->effectiveDate,
                GisAttachment::convertToArray($this->attachments)
            );
        }

        switch ($this->contractType) {
            case static::CONTRACT_TYPE_OFFER:
                $target->setIsOffer();
                break;
            case static::CONTRACT_TYPE_MC:
                $target->Organization = new SupplyResourceContractType_Organization($this->managementCompanyGuid);
                break;
            case static::CONTRACT_TYPE_OWNER:
                $owner = new Owner();

                switch ($this->counterpartyType) {
                    case static::COUNTERPARTY_TYPE_ORGANIZATION:
                        $owner->RegOrg = new RegOrgType($this->organizationGuid);
                        break;
                    case static::COUNTERPARTY_TYPE_PERSON:
                        if (!empty($this->person)) {
                            $owner->Ind = $this->person->convertTo(DRSOIndType::className());
                        } else {
                            $owner->Ind = "";
                        }
                        break;
                }

                switch ($this->propertyType) {
                    case static::PROPERTY_TYPE_APARTMENT_BUILDING:
                        $target->ApartmentBuildingOwner = $owner;
                        break;
                    case static::PROPERTY_TYPE_LIVING_HOUSE:
                        $target->LivingHouseOwner = $owner;
                        break;
                }
                break;
        }

        if (!empty($this->completionDate)) $target->ComptetionDate = $this->completionDate->format('Y-m-d');

        if (!empty($this->base)) {
            $target->ContractBase = $this->base->convertTo();
        }

        $target->IsPlannedVolume = $this->isPlannedVolume;

        $target->Period = $this->readingsDeliveryPeriod->convertTo();

        if (!empty($this->billingDay))
            $target->BillingDate = $this->billingDay->convertTo();
        if (!empty($this->paymentDay))
            $target->PaymentDate = $this->paymentDay->convertTo();
        if (!empty($this->providingInformationDay))
            $target->ProvidingInformationDate = $this->providingInformationDay->convertTo();

        $target->ContractSubject = [];
        $target->Quality = [];
        foreach ($this->subjects as $subject) {
            /* @var SupplyResourceContractType_ContractSubject $gisSubject */
            $gisSubject = $subject->convertTo(SupplyResourceContractType_ContractSubject::className());
            if (!empty($subject->qualityIndicators)) {
                foreach ($subject->qualityIndicators as $quality) {
                    /* @var Quality $gisQuality */
                    $gisQuality = $quality->convertTo(\stdClass::class);
                    $gisQuality->PairKey = $gisSubject->TransportGUID;
                    $target->Quality[] = $gisQuality;
                }
            }

            $target->ContractSubject[] = $gisSubject;
        }
        $target->ObjectAddress = GisResourceSupplyContractObject::convertToArray($this->objects, SupplyResourceContractType_ObjectAddress::className());

        for ($i = 0; $i < count($target->ObjectAddress); $i++) {
            $pairs = [];
            for ($j = 0; $j < count($target->ContractSubject); $j++) {
                $pair = new SupplyResourceContractType_ObjectAddress_Pair();
                $pair->PairKey = $target->ContractSubject[$j]->TransportGUID;
                $pair->StartSupplyDate = $target->ContractSubject[$j]->StartSupplyDate;
                $pair->EndSupplyDate = $target->ContractSubject[$j]->EndSupplyDate;

                if (in_array($target->ContractSubject[$j]->MunicipalResource->Code, [2, 3])) {
                    $pair->HeatingSystemType = new HeatingSystemType();
                    $pair->HeatingSystemType->OpenOrNot = $this->heatingSystemIsClosed ? 'Closed' : 'Opened';
                    $pair->HeatingSystemType->CentralizedOrNot = $this->heatingSystemIsDecentralized ? 'Decentralized' : 'Centralized';
                }

                $pairs[] = $pair;
            }
            $target->ObjectAddress[$i]->Pair = $pairs;
        }

        $target->SpecifyingQualityIndicators = $this->commonQualityIndicators ? 'D' : 'O';
    }



    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return SupplyResourceContractType::className();
    }


}