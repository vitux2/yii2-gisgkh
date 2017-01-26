<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\ContractSubjectType_PlannedVolume;
use opengkh\gis\models\common\CompatibleWithGisgkh;

/**
 * Плановый объем и режим подачи за год
 * @package opengkh\gis\models\Houses
 */
class GisResourceSupplyContractPlannedVolume extends CompatibleWithGisgkh
{
    /**
     * @var string $volume Плановый объем поставки ресурса по договору. Decimal
     */
    public $volume = null;

    /**
     * @var string $unit Единица измерения. Код ОКЕИ
     */
    public $unit = null;

    /**
     * @var string $feedingMode Режим подачи. Строка
     */
    public $feedingMode = null;

    /**
     * @inheritDoc
     * @param ContractSubjectType_PlannedVolume $source
     */
    function fillFrom($source)
    {
        $this->volume = $source->Volume;
        $this->unit = $source->Unit;
        $this->feedingMode = $source->FeedingMode;

        return $this;
    }

    /**
     * @inheritDoc
     * @param ContractSubjectType_PlannedVolume $target
     */
    function fillTo(&$target)
    {
        $target->Volume = $this->volume;
        $target->Unit = $this->unit;
        $target->FeedingMode = $this->feedingMode;
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return ContractSubjectType_PlannedVolume::className();
    }
}