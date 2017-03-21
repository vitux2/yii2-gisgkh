<?php

namespace gisgkh\types\NsiCommon;

/**
 * Запрос на получение данных общесистмного справочника.
 */
class exportNsiItemRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Реестровый номер справочника.
     * 
     * @var string
     */
     public $RegistryNumber = null;

    /**
     * Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * 
     * @var string
     */
     public $ListGroup = null;

    /**
     * Дата и время, измененные после которой элементы справочника должны быть возвращены в ответе. Если не указана, возвращаются все элементы справочника.
     * 
     * @var string
     */
     public $ModifiedAfter = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.2";

    /**
     * @param string $RegistryNumber Реестровый номер справочника.
     * @param string $ListGroup Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * @param string [$ModifiedAfter] Дата и время, измененные после которой элементы справочника должны быть возвращены в ответе. Если не указана, возвращаются все элементы справочника.
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $RegistryNumber = null, string $ListGroup = null, string $ModifiedAfter = null, $version = "10.0.1.2")
    {
        $this->RegistryNumber = $RegistryNumber;
        $this->ListGroup = $ListGroup;
        $this->ModifiedAfter = $ModifiedAfter;
        $this->version = $version;
    }
}