<?php

namespace gisgkh\types\HouseManagement\exportAccountResultType;

/**
 * Cведения об обязательствах
 */
class Obligations
{
    /**
     * Идентификатор версии договора
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Идентификатор версии устава в ГИС ЖКХ 
     * 
     * @var string
     */
     public $CharterVersionGUID = null;

    /**
     * Дом, с которым связан лицевой счёт, заблокирован в договоре/уставе
     * 
     * @var string
     */
     public $IsLocked = null;

    /**
     * @param string $ContractVersionGUID Идентификатор версии договора
     * @param string $CharterVersionGUID Идентификатор версии устава в ГИС ЖКХ 
     * @param string [$IsLocked] Дом, с которым связан лицевой счёт, заблокирован в договоре/уставе
     */
    public function __construct(string $ContractVersionGUID = null, string $CharterVersionGUID = null, string $IsLocked = null)
    {
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->CharterVersionGUID = $CharterVersionGUID;
        $this->IsLocked = $IsLocked;
    }
}