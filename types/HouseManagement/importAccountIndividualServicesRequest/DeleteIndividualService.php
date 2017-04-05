<?php

namespace gisgkh\types\HouseManagement\importAccountIndividualServicesRequest;

/**
 * Удаление индивидуальной услуги
 */
class DeleteIndividualService
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор индивидуальной услуги ЛС
     * 
     * @var string
     */
     public $AccountIndividualServiceGUID = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string $AccountIndividualServiceGUID Идентификатор индивидуальной услуги ЛС
     */
    public function __construct(string $TransportGUID = null, string $AccountIndividualServiceGUID = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->AccountIndividualServiceGUID = $AccountIndividualServiceGUID;
    }
}