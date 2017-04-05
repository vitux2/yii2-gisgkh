<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * В качестве поискового параметра используется Идентификатор ИС из RequestHeader
 */
class exportDataProviderRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Выгрузить только активных поставщиков данных
     * 
     * @var string
     */
     public $IsActual = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.2.1";

    /**
     * @param string [$IsActual] Выгрузить только активных поставщиков данных
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $IsActual = null, $version = "10.0.2.1")
    {
        $this->IsActual = $IsActual;
        $this->version = $version;
    }
}