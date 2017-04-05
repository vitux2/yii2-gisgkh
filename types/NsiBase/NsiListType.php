<?php

namespace gisgkh\types\NsiBase;

/**
 * Перечень справочников с датой последнего изменения каждого из них.
 */
class NsiListType
{
    /**
     * Дата и время формирования перечня справочников.
     * 
     * @var string
     */
     public $Created = null;

    /**
     * Наименование, дата и время последнего изменения справочника.
     * 
     * @var \gisgkh\types\NsiBase\NsiItemInfoType[]
     */
     public $NsiItemInfo = null;

    /**
     * Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     * 
     * @var string
     */
     public $ListGroup = null;

    /**
     * @param string $Created Дата и время формирования перечня справочников.
     * @param \gisgkh\types\NsiBase\NsiItemInfoType[] $NsiItemInfo Наименование, дата и время последнего изменения справочника.
     * @param string $ListGroup Группа справочника:
NSI - (по умолчанию) общесистемный 
NSIRAO - ОЖФ
     */
    public function __construct(string $Created = null, array $NsiItemInfo = null, string $ListGroup = null)
    {
        $this->Created = $Created;
        $this->NsiItemInfo = $NsiItemInfo;
        $this->ListGroup = $ListGroup;
    }
}