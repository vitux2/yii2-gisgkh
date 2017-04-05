<?php

namespace gisgkh\types\Base;

/**
 * Ссылка на субъект РФ (ФИАС)
 */
class RegionType
{
    /**
     * Код региона (ФИАС)
     * 
     * @var string
     */
     public $code = null;

    /**
     * Полное наименование
     * 
     * @var string
     */
     public $name = null;

    /**
     * @param string $code Код региона (ФИАС)
     * @param string [$name] Полное наименование
     */
    public function __construct(string $code = null, string $name = null)
    {
        $this->code = $code;
        $this->name = $name;
    }
}