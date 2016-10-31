<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\ContractSubjectType;
use gisgkh\types\HouseManagement\SupplyResourceContractType_ServiceType;
use opengkh\gis\models\common\CompatibleWithGisgkh;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;

/**
 * Предмет договора: вид коммунальной услуги, вид ресурса, период поставки и плановый объём
 *
 * @package opengkh\gis\models\Houses
 */
class ResourceSupplyContractSubject extends CompatibleWithGisgkh
{
    /**
     * @var GisNsiDirectoryEntryLink $serviceType Вид коммунальной услуги. По справочнику
     */
    public $serviceType = null;

    /**
     * @var GisNsiDirectoryEntryLink $municipalResource Вид тарифицируемого ресурса. По справочнику
     */
    public $municipalResource = null;

    /**
     * @var \DateTime $startSupplyDate Дата начала поставки ресурса
     */
    public $startSupplyDate = null;

    /**
     * @var \DateTime $endSupplyDate Дата окончания поставки ресурса
     */
    public $endSupplyDate = null;

    /**
     * @var ResourceSupplyContractPlannedVolume|null $plannedVolume
     */
    public $plannedVolume = null;

    /**
     * @var QualityIndicator[] $qualityIndicators
     */
    public $qualityIndicators = null;

    /**
     * @inheritDoc
     * @param ContractSubjectType $source
     */
    function fillFrom($source)
    {
        $this->serviceType = GisNsiDirectoryEntryLink::convertFrom($source->ServiceType);
        $this->municipalResource = GisNsiDirectoryEntryLink::convertFrom($source->MunicipalResource);
        $this->startSupplyDate = $source->getStartSupplyDate();
        $this->endSupplyDate = $source->getEndSupplyDate();
        if (!empty($source->PlannedVolume)) {
            $this->plannedVolume = ResourceSupplyContractPlannedVolume::convertFrom($source->PlannedVolume);
        }
        return $this;
    }

    /**
     * @inheritDoc
     * @param ContractSubjectType $target
     */
    function fillTo(&$target)
    {
        $target->ServiceType = $this->serviceType->convertTo(\stdClass::class);
        $target->MunicipalResource = $this->municipalResource->convertTo(\stdClass::class);
        $target->StartSupplyDate = $this->startSupplyDate->format('Y-m-d');
        $target->EndSupplyDate = $this->endSupplyDate->format('Y-m-d');
        if (!empty($this->plannedVolume)) {
            $target->PlannedVolume = $this->plannedVolume->convertTo();
        }
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return ContractSubjectType::className();
    }
}