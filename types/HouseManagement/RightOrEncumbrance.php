<?php

namespace gisgkh\types\HouseManagement;

/**
 * Поиск в ЕГРП по регистрационным данным прав или ограничениям прав. Наличие в экспорте указывает на установленную связь с ЕГРП по этому элементам.
 */
class RightOrEncumbrance
{
    /**
     * Тип ключа:
(R)ight - право
(E)ncumbrance - ограничение/обременение права
     * 
     * @var string
     */
     public $Type = null;

    /**
     * Номер государственной регистрации
     * 
     * @var string
     */
     public $RegNumber = null;

    /**
     * Дата государственной регистрации
     * 
     * @var string
     */
     public $RegDate = null;

    /**
     * @param string $Type Тип ключа:
(R)ight - право
(E)ncumbrance - ограничение/обременение права
     * @param string $RegNumber Номер государственной регистрации
     * @param string $RegDate Дата государственной регистрации
     */
    public function __construct(string $Type = null, string $RegNumber = null, string $RegDate = null)
    {
        $this->Type = $Type;
        $this->RegNumber = $RegNumber;
        $this->RegDate = $RegDate;
    }
}