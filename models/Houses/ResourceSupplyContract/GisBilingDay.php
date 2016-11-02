<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 01.11.16
 * Time: 16:14
 */

namespace opengkh\gis\models\Houses\ResourceSupplyContract;

use gisgkh\types\GisgkhType;
use gisgkh\types\HouseManagement\SupplyResourceContractType_BillingDate;
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
        return SupplyResourceContractType_BillingDate::className();
    }

    /**
     * @inheritDoc
     * @param SupplyResourceContractType_BillingDate $source
     */
    function fillFrom($source)
    {
        $this->day = GisDayOfMonth::convertFrom($source->Date);
        $this->nextMonth = $source->DateType == 'N';
    }

    /**
     * @inheritDoc
     * @param SupplyResourceContractType_BillingDate $target
     */
    function fillTo(&$target)
    {
        $target->Date = $this->day->convertTo();
        $target->DateType = ( $this->nextMonth ? 'N' : 'C' );
    }
}