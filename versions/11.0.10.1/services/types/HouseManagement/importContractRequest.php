<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт сведений о ДУ
 */
class importContractRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract[]
     */
     public $Contract = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract[] $Contract 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Contract = null, $version = "10.0.1.1")
    {
        $this->Contract = $Contract;
        $this->version = $version;
    }
}