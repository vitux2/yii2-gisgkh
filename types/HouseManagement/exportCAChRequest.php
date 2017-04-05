<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт ДУ/уставов
 */
class exportCAChRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportCAChRequestCriteriaType[]
     */
     public $Criteria = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportCAChRequestCriteriaType[] $Criteria 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Criteria = null, $version = "10.0.1.1")
    {
        $this->Criteria = $Criteria;
        $this->version = $version;
    }
}