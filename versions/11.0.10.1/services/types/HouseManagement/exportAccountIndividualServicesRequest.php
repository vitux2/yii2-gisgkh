<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт индивидуальных услуг лицевого счета
 */
class exportAccountIndividualServicesRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Идентификатор лицевого счета
     * 
     * @var string[]
     */
     public $AccountGuid = [];

    /**
     * Идентификатор индивидуальной услуги ЛС
     * 
     * @var string[]
     */
     public $AccountIndividualServiceGUID = [];

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "11.0.0.1";

    /**
     * @param string[] $AccountGuid Идентификатор лицевого счета
     * @param string[] $AccountIndividualServiceGUID Идентификатор индивидуальной услуги ЛС
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $AccountGuid = [], array $AccountIndividualServiceGUID = [], $version = "11.0.0.1")
    {
        $this->AccountGuid = $AccountGuid;
        $this->AccountIndividualServiceGUID = $AccountIndividualServiceGUID;
        $this->version = $version;
    }
}