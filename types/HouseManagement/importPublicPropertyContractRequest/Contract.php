<?php

namespace gisgkh\types\HouseManagement\importPublicPropertyContractRequest;

/**
 * 
 */
class Contract
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Идентификатор версии ДОГПОИ в ГИС ЖКХ 
     * 
     * @var string
     */
     public $ContractVersionGUID = null;

    /**
     * Создание\изменение ДОГПОИ
     * 
     * @var \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract
     */
     public $PublicPropertyContract = null;

    /**
     * Аннулирование 
     * 
     * @var \gisgkh\types\HouseManagement\AnnulmentType
     */
     public $AnnulmentContract = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param string [$ContractVersionGUID] Идентификатор версии ДОГПОИ в ГИС ЖКХ 
     * @param \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract $PublicPropertyContract Создание\изменение ДОГПОИ
     * @param \gisgkh\types\HouseManagement\AnnulmentType $AnnulmentContract Аннулирование 
     */
    public function __construct(string $TransportGUID = null, string $ContractVersionGUID = null, \gisgkh\types\HouseManagement\importPublicPropertyContractRequest\Contract\PublicPropertyContract $PublicPropertyContract = null, \gisgkh\types\HouseManagement\AnnulmentType $AnnulmentContract = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->ContractVersionGUID = $ContractVersionGUID;
        $this->PublicPropertyContract = $PublicPropertyContract;
        $this->AnnulmentContract = $AnnulmentContract;
    }
}