<?php

namespace gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate;

/**
 * Архивация ПУ без замены на другой ПУ
 */
class ArchiveDevice
{
    /**
     * Причина архивации. Ссылка на НСИ "Причина архивации прибора учета" (реестровый номер 21).
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $ArchivingReason = null;

    /**
     * @param \gisgkh\types\NsiBase\nsiRef $ArchivingReason Причина архивации. Ссылка на НСИ "Причина архивации прибора учета" (реестровый номер 21).
     */
    public function __construct(\gisgkh\types\NsiBase\nsiRef $ArchivingReason = null)
    {
        $this->ArchivingReason = $ArchivingReason;
    }
}