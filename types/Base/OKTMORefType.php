<?php

namespace gisgkh\types\Base;

/**
 * Ссылка на ОКТМО
 */
class OKTMORefType
{
    /**
     * Код по ОКТМО
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
     * @param string $code Код по ОКТМО
     * @param string [$name] Полное наименование
     */
    public function __construct(string $code = null, string $name = null)
    {
        $this->code = $code;
        $this->name = $name;
    }
}