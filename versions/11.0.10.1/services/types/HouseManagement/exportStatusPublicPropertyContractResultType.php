<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class exportStatusPublicPropertyContractResultType
{
    /**
     * ДОИ
     * 
     * @var \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract[]
     */
     public $PublicPropertyContract = [];

    /**
     * @param \gisgkh\types\HouseManagement\exportStatusPublicPropertyContractResultType\PublicPropertyContract[] $PublicPropertyContract ДОИ
     */
    public function __construct(array $PublicPropertyContract = [])
    {
        $this->PublicPropertyContract = $PublicPropertyContract;
    }
}