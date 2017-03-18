<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\SupplyResourceContractType\Period;
use gisgkh\types\HouseManagement\SupplyResourceContractType\Period\End;
use gisgkh\types\HouseManagement\SupplyResourceContractType\Period\Start;
use opengkh\gis\models\common\CompatibleWithGisgkh;
use opengkh\gis\models\common\GisDayOfMonth;

/**
 * Период сдачи показаний приборов учета
 *
 * @package opengkh\gis\models\Houses\ResourceSupplyContract
 */
class GisReadingsDeliveryPeriod extends CompatibleWithGisgkh
{
    /**
     * @var GisDayOfMonth $firstDay день начала сдачи показаний
     */
    public $firstDay = null;

    /**
     * @var bool $firstDayInNextMonth день начала сдачи показаний -- в следующем месяце
     */
    public $firstDayInNextMonth = false;

    /**
     * @var GisDayOfMonth $lastDay день окончания сдачи показаний
     */
    public $lastDay = null;

    /**
     * @var bool $lastDayInNextMonth день окончания сдачи показаний -- в следующем месяце
     */
    public $lastDayInNextMonth = false;

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        return Period::class;
    }

    /**
     * @inheritDoc
     * @param Period $source
     */
    function fillFrom($source)
    {
        $this->firstDay = GisDayOfMonth::convertFrom($source->Start->StartDate);
        $this->firstDayInNextMonth = filter_var($source->Start->NextMonth, FILTER_VALIDATE_BOOLEAN);

        $this->lastDay = GisDayOfMonth::convertFrom($source->End->EndDate);
        $this->lastDayInNextMonth = filter_var($source->End->NextMonth, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @inheritDoc
     * @param Period $target
     */
    function fillTo(&$target)
    {
        $target->Start = new Start();
        $target->End = new End();

        $target->Start->NextMonth = $this->firstDayInNextMonth ? 'true' : null;
        $target->Start->StartDate = $this->firstDay->convertTo();
        $target->End->NextMonth = $this->lastDayInNextMonth ? 'true' : null;
        $target->End->EndDate = $this->lastDay->convertTo();
        return $target;
    }
}