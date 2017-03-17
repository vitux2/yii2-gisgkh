<?php

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\HouseManagement\SupplyResourceContractType\BillingDate;
use opengkh\gis\models\common\CompatibleWithGisgkh;
use opengkh\gis\models\common\GisDayOfMonth;

class GisBilingDay extends CompatibleWithGisgkh
{
    /**
     * @var GisDayOfMonth
     */
    public $day = null;

    public $nextMonth = false;

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        return BillingDate::class;
    }

    /**
     * @inheritDoc
     * @param BillingDate $source
     */
    function fillFrom($source)
    {
        $this->day = GisDayOfMonth::convertFrom($source->Date);
        $this->nextMonth = $source->DateType == 'N';
    }

    /**
     * @inheritDoc
     * @param BillingDate $target
     */
    function fillTo(&$target)
    {
        $target->Date = $this->day->convertTo();
        $target->DateType = ( $this->nextMonth ? 'N' : 'C' );
    }
}