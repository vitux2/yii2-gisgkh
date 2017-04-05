<?php

namespace gisgkh\types\HouseManagement\importAccountIndividualServicesRequest;

/**
 * Создание/обновление индивидуальной услуги ЛС
AccountGUID - для создания индивидуальной услуги ЛС
IndividualServiceGUID - для обновления индивидуальной услуги ЛС

 */
class IndividualService extends \gisgkh\types\HouseManagement\AccountIndividualServiceType
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * 
     * @var string
     */
     public $AccountGUID = null;

    /**
     * Идентификатор индивидуальной услуги ЛС
     * 
     * @var string
     */
     public $AccountIndividualServiceGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $AccountGUID Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * @param string $AccountIndividualServiceGUID Идентификатор индивидуальной услуги ЛС
     */
    public function __construct(string $TransportGUID = null, string $AccountGUID = null, string $AccountIndividualServiceGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->AccountGUID = $AccountGUID;
        $this->AccountIndividualServiceGUID = $AccountIndividualServiceGUID;
    }
}