<?php

namespace gisgkh\types\lib\Nsi;

use gisgkh\types\GisgkhType;

/**
 * Ссылка на справочник
 *
 * @package gisgkh\types\lib\Nsi
 */
class nsiRef extends GisgkhType
{
    /**
     * @var string $Code Код записи справочника
     */
    public $Code = null;

    /**
     * @var string $GUID Идентификатор в ГИС ЖКХ
     */
    public $GUID = null;

    /**
     * @var string $Name Значение
     */
    public $Name = null;
}