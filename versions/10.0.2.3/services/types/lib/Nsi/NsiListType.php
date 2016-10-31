<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Перечень справочников
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiListType extends GisgkhType
{
    /**
     * @var string $Created Дата и время формирования перечня справочников. Формат W3C
     */
    public $Created = null;

    /**
     * @var NsiItemInfoType[] $NsiItemInfo Информация по каждому справочнику
     */
    public $NsiItemInfo = [];

    /**
     * @var string $ListGroup Группа справочника:
     * NSI - (по умолчанию) общесистемный
     * NSIRAO - ОЖФ
     */
    public $ListGroup = null;

}