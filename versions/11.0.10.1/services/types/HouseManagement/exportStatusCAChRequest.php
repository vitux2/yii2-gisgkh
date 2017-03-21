<?php

namespace gisgkh\types\HouseManagement;

/**
 * Экспорт ДУ/уставов
 */
class exportStatusCAChRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusCAChRequest\Criteria[]
     */
     public $Criteria = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.1";

    /**
     * @param \gisgkh\types\HouseManagement\exportStatusCAChRequest\Criteria[] $Criteria 
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(array $Criteria = null, $version = "10.0.1.1")
    {
        $this->Criteria = $Criteria;
        $this->version = $version;
    }
}