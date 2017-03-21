<?php

namespace gisgkh\types\HouseManagement;

/**
 * Ответ на запрос экспорта индивидуальных услуг лицевого счета
 */
class exportAccountIndividualServicesResult extends \gisgkh\types\Base\BaseType
{
    /**
     * Создание/обновление индивидуальной услуги ЛС
AccountGUID - для создания индивидуальной услуги ЛС
IndividualServiceGUID - для обновления индивидуальной услуги ЛС

     * 
     * @var \gisgkh\types\HouseManagement\exportAccountIndividualServicesResultType[]
     */
     public $IndividualService = null;

    /**
     * Описание ошибок контролей или бизнес-процесса
     * 
     * @var \gisgkh\types\Base\ErrorMessageType
     */
     public $ErrorMessage = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportAccountIndividualServicesResultType[] [$IndividualService] Создание/обновление индивидуальной услуги ЛС
AccountGUID - для создания индивидуальной услуги ЛС
IndividualServiceGUID - для обновления индивидуальной услуги ЛС

     * @param \gisgkh\types\Base\ErrorMessageType $ErrorMessage Описание ошибок контролей или бизнес-процесса
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $IndividualService = null, \gisgkh\types\Base\ErrorMessageType $ErrorMessage = null, $version = "11.0.0.1")
    {
        $this->IndividualService = $IndividualService;
        $this->ErrorMessage = $ErrorMessage;
        $this->version = $version;
    }
}