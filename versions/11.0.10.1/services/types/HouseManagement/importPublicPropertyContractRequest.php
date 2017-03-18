<?php

namespace gisgkh\types\HouseManagement;

/**
 * Импорт ДОГПОИ (Договор на пользование общим имуществом )
 */
class importPublicPropertyContractRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract[]
     */
     public $Contract = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract[] $Contract 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Contract = null, $version = "10.0.2.1")
    {
        $this->Contract = $Contract;
        $this->version = $version;
    }
}