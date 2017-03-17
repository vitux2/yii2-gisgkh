<?php

namespace gisgkh\types\NsiCommon;

/**
 * Запрос получения перечня  общесистмного справочников.
 */
class exportNsiListRequest extends \gisgkh\types\Base\BaseType
{
    /**
     * Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * 
     * @var string
     */
     public $ListGroup = null;

    /**
     * Версия элемента, начиная с которой поддерживается совместимость
     * 
     * @var string
     */
    public $version = "10.0.1.2";

    /**
     * @param string [$ListGroup] Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * @param string [$version] Версия элемента, начиная с которой поддерживается совместимость
     */
    public function __construct(string $ListGroup = null, $version = "10.0.1.2")
    {
        $this->ListGroup = $ListGroup;
        $this->version = $version;
    }
}