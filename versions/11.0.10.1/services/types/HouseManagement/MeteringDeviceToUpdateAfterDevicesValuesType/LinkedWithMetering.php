<?php

namespace gisgkh\types\HouseManagement\MeteringDeviceToUpdateAfterDevicesValuesType;

/**
 * Объем ресурса(ов) определяется с помощью нескольких приборов учета
 */
class LinkedWithMetering
{
    /**
     * Место установки текущего прибора учета. Возможные значения: in - На входе/На подающем трубопроводе, out - На выходе/На обратном трубопроводе. Если прибор учета измеряет электрическую энергию, то ПУ устанавливается на входе/на выходе; если прибор учета измеряет коммунальный ресурс, отличный от электрической энергии, то ПУ устанавливается на подающем трубопроводе / на обратном трубопроводе
     * 
     * @var string
     */
     public $InstallationPlace = null;

    /**
     * Идентификатор версии ПУ, заведенного в ГИС ЖКХ, с которым требуется установить связь текущего ПУ
     * 
     * @var string[]
     */
     public $LinkedMeteringDeviceVersionGUID = [];

    /**
     * @param string $InstallationPlace Место установки текущего прибора учета. Возможные значения: in - На входе/На подающем трубопроводе, out - На выходе/На обратном трубопроводе. Если прибор учета измеряет электрическую энергию, то ПУ устанавливается на входе/на выходе; если прибор учета измеряет коммунальный ресурс, отличный от электрической энергии, то ПУ устанавливается на подающем трубопроводе / на обратном трубопроводе
     * @param string[] [$LinkedMeteringDeviceVersionGUID] Идентификатор версии ПУ, заведенного в ГИС ЖКХ, с которым требуется установить связь текущего ПУ
     */
    public function __construct(string $InstallationPlace = null, array $LinkedMeteringDeviceVersionGUID = [])
    {
        $this->InstallationPlace = $InstallationPlace;
        $this->LinkedMeteringDeviceVersionGUID = $LinkedMeteringDeviceVersionGUID;
    }
}