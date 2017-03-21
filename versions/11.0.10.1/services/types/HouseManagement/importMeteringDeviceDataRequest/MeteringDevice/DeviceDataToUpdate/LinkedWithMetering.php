<?php

namespace gisgkh\types\HouseManagement\importMeteringDeviceDataRequest\MeteringDevice\DeviceDataToUpdate;

/**
 * Связать ПУ с другими заведенными в ГИС ЖКХ ПУ. Операция возможна только, если для текущего ПУ установлен признак "Объем ресурса(ов) определяется с помощью нескольких приборов учета". Необходимо присылать актуальную коллекцию связанных ПУ
 */
class LinkedWithMetering
{
    /**
     * Идентификатор версии ПУ, заведенного в ГИС ЖКХ, с которым требуется установить связь текущего ПУ
     * 
     * @var string[]
     */
     public $LinkedMeteringDeviceVersionGUID = null;

    /**
     * @param string[] $LinkedMeteringDeviceVersionGUID Идентификатор версии ПУ, заведенного в ГИС ЖКХ, с которым требуется установить связь текущего ПУ
     */
    public function __construct(array $LinkedMeteringDeviceVersionGUID = null)
    {
        $this->LinkedMeteringDeviceVersionGUID = $LinkedMeteringDeviceVersionGUID;
    }
}