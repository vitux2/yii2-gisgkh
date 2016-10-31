<?php

namespace gisgkh\types\NsiCommon;

use gisgkh\types\lib\BaseType;

/**
 * Запрос получения перечня общесистмного справочников
 *
 * @package gisgkh\types\NsiCommon
 */
class exportNsiListRequest extends BaseType
{
    /**
     * @var string $ListGroup Группа справочника:
     * NSI - (по умолчанию) общесистемный
     * NSIRAO - ОЖФ
     */
    public $ListGroup = null;

    public $version = "10.0.1.2";

    /**
     * exportNsiListRequest constructor
     *
     * @param string|null $ListGroup
     */
    public function __construct($ListGroup = null)
    {
        $this->ListGroup = $ListGroup;
    }
}