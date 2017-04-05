<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт индивидуальных услуг ЛС
 */
class importAccountIndividualServicesRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Создание/обновление индивидуальной услуги ЛС
AccountGUID - для создания индивидуальной услуги ЛС
IndividualServiceGUID - для обновления индивидуальной услуги ЛС

     * 
     * @var \gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\IndividualService
     */
     public $IndividualService = null;

    /**
     * Удаление индивидуальной услуги
     * 
     * @var \gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\DeleteIndividualService
     */
     public $DeleteIndividualService = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param \gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\IndividualService $IndividualService Создание/обновление индивидуальной услуги ЛС
AccountGUID - для создания индивидуальной услуги ЛС
IndividualServiceGUID - для обновления индивидуальной услуги ЛС

     * @param \gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\DeleteIndividualService $DeleteIndividualService Удаление индивидуальной услуги
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(\gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\IndividualService $IndividualService = null, \gisgkh\types\HouseManagement\importAccountIndividualServicesRequest\DeleteIndividualService $DeleteIndividualService = null, $version = "11.0.0.1")
    {
        $this->IndividualService = $IndividualService;
        $this->DeleteIndividualService = $DeleteIndividualService;
        $this->version = $version;
    }
}