<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\GisgkhType;
use gisgkh\types\HouseManagement\Quality;
use opengkh\gis\models\common\CompatibleWithGisgkh;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;

/**
 * Показатель качества коммунальной услуги
 *
 * @package opengkh\gis\models\Houses\ResourceSupplyContract
 */
class QualityIndicator extends CompatibleWithGisgkh
{

    /**
     * @var GisNsiDirectoryEntryLink $indicator
     */
    public $indicator = null;

    /**
     * @var float $value значение показателя
     */
    public $value = null;

    /**
     * @var string $OKEI
     */
    public $OKEI = null;

    /**
     * @var bool $corresponds соответствует/не соответствует
     */
    public $corresponds = null;

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        return Quality::className();
    }

    /**
     * @inheritDoc
     * @param Quality $source
     */
    function fillFrom($source)
    {
        $this->indicator = GisNsiDirectoryEntryLink::convertFrom($source->QualityIndicator);
        if (!empty($source->IndicatorValue->Number)) {
            $this->value = floatval($source->IndicatorValue->Number);
            $this->OKEI = $source->IndicatorValue->OKEI;
        } else {
            $this->corresponds = filter_var($source->IndicatorValue->Correspond, FILTER_VALIDATE_BOOLEAN);
        }

    }

    /**
     * @inheritDoc
     * @param Quality $target
     */
    function fillTo(&$target)
    {
        $target->QualityIndicator = $this->indicator->convertTo(\stdClass::class);
        $target->IndicatorValue = new \stdClass();
        if (!empty($this->value)) {
            $target->IndicatorValue->Number = strval($this->value);
            $target->IndicatorValue->OKEI = $this->OKEI;
        } else {
            $target->IndicatorValue->Correspond = $this->corresponds ? 'true' : 'false';
        }

    }
}