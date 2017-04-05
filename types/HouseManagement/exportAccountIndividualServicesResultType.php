<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportAccountIndividualServicesResultType extends \gisgkh\types\HouseManagement\AccountIndividualServiceType
{
    /**
     * Идентификатор индивидуальной услуги ЛС
     * 
     * @var string
     */
     public $AccountIndividualServiceGUID = null;

    /**
     * Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * 
     * @var string
     */
     public $AccountGUID = null;

    /**
     * Услуга связана с лицевыс счетом?
     * 
     * @var string
     */
     public $IsActual = null;

    /**
     * @param string $AccountIndividualServiceGUID Идентификатор индивидуальной услуги ЛС
     * @param string $AccountGUID Идентификатор ЛС в ГИС ЖКХ (при обновлении данных ЛС)
     * @param string $IsActual Услуга связана с лицевыс счетом?
     */
    public function __construct(string $AccountIndividualServiceGUID = null, string $AccountGUID = null, string $IsActual = null)
    {
        $this->AccountIndividualServiceGUID = $AccountIndividualServiceGUID;
        $this->AccountGUID = $AccountGUID;
        $this->IsActual = $IsActual;
    }
}